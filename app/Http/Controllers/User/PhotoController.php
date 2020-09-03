<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\User;
use App\Model\user\like;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\theme;
use App\Model\user\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image;
use File;
use ZipArchive;
use Illuminate\Support\Facades\Auth;


class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function submitPhoto(Request $request)
    {

		$tags =tag::all();
        $categories =category::all();
        $posts = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id','users.name','users.avatar','users.agree','users.termsimg'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts','categories'))->render();

            return response()->json(['html'=>$view]);

        }
        if (!empty($posts->terms) && !empty($posts->termsimg)){
          return view('user.terms',compact('posts', 'tags','categories', 'theme'));
        }else{
        return view('user.submitPhoto',compact('posts', 'tags','categories', 'theme'));
        }
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            $tags =tag::all();
            $theme =theme::all();
            $categories =category::all();
            return view('user.submitPhoto',compact('tags','categories', 'theme'));

    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            'image' => 'required|min:2560',
            'visit_count' => 'nullable',
            ]);
        if ($request->hasFile('image')) {
            $imageName = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('/storage'), $imageName);
        }else{
            return 'No';
        }
        $post = new post;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->get('title');
        $post->slug = $request->get('title');
        $post->body = $request->body;
        $post->status = $request->status;
        $post->posted_by = Auth::user()->id;
        $post->visit_count = $request->visit_count;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('submitPhoto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $post = post::with('tags','categories')->where('id',$id)->first();
            $tags =tag::all();
            $categories =category::all();
            $theme =theme::all();

            return view('user.submitPhotoedit',compact('tags','categories','post', 'theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image'=>'nullable',
            'visit_count' => 'nullable',
            ]);
        if ($request->hasFile('image')) {
            $imageName = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('/storage'), $imageName);
        }
        $post = post::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->visit_count = $request->visit_count;
        $post->terms = $request->terms;
        $post->termsimg = $request->termsimg;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        return redirect(route('submitPhoto'));
    }

    public function termsUpdate(Request $request)
    {
        $user = Auth::user();
        $user->terms = $request->terms;
        $user->termsimg = $request->termsimg;
        $user->save();

        return redirect(route('submitPhoto'));
    }
    public function agreeUpdate(Request $request)
    {
        $user = Auth::user();
        $user->agree = $request->agree;
        $user->save();

        return redirect(route('submitPhoto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }

    public function download($image){
        $post = post::where('image', $image)->firstOrFail();
        $post->downloads = $post->downloads + 1;
        $post->save();
        $path = public_path(). '/storage/'. $post->image;
        return response()->download($path, $post->original_filename, ['Content-Type' => $post->mime]);
     }
     public function uguideline(){
        return view('user.uploadGuideline',compact('posts', 'tags','categories', 'theme'));
     }

}
