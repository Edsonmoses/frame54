<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\theme;
use App\Model\user\photo;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function home(Request $request)
    {

        $categories =category::all();
        $tags =tag::all();
        $theme =theme::all();
        $posts = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id AS user_id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);
        /*$artists = post::where('posted_by', '=', $id )->orderBy('created_at','DESC')
        ->select(['posts.*','users.id AS user_id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);-->*/

       //dd($artists);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts','categories','tags', 'theme','artists'))->render();

            return response()->json(['html'=>$view]);

        }

    	return view('user.blog',compact('posts','categories','tags', 'theme','artists'));
    }
    public function tag(tag $tag)
    {
        $categories =category::all();
        $tags =tag::all();
        $theme =theme::all();
        $posts = $tag->posts();
        return view('user.blog',compact('posts','categories','tags', 'theme'));
    }

    public function category(category $category)
    {
        $categories =category::all();
        $tags =tag::all();
        $theme =theme::all();
        $post = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id AS user_id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')->first();
        $posts = $category->posts();
        //dd($post);
        return view('user.category',compact('posts','categories','tags','post', 'theme'));
    }

    public function Guidelines(Request $request)
    {
        $theme =theme::all();
    	return view('user.guidelines',compact('theme'));
    }

    public function frameLicense()
    {
        $theme =theme::all();
    	return view('user.license', compact('theme'));
    }
    public function framePolicy()
    {
        $theme =theme::all();
    	return view('user.policy', compact('theme'));
    }

    public function Conditions()
    {
        $theme =theme::all();
    	return view('user.conditions', compact('theme'));
    }
    public function developers()
    {
        $theme =theme::all();
    	return view('user.developers', compact('theme'));
    }
    public function about(Request $request)
    {
        $categories =category::all();
        $tags =tag::all();
        $posts = post::all();
        $theme =theme::all();
        //dd($theme);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts','categories','tags','theme'))->render();

            return response()->json(['html'=>$view]);

        }

    	return view('user.about',compact('posts','categories','tags', 'theme'));
    }
    public function faq()
    {
        $theme =theme::all();
    	return view('user.blogs_full',compact('theme'));
    }
    public function team()
    {
        $theme =theme::all();
    	return view('user.team', compact('theme'));
    }
    public function press()
    {
        $theme =theme::all();
    	return view('user.press', compact('theme'));
    }
    public function help()
    {
        $theme =theme::all();
    	return view('user.help', compact('theme'));
    }
    public function security()
    {
        $theme =theme::all();
    	return view('user.security', compact('theme'));
    }
    public function likes($like){
        $post = post::where('like', $like)->firstOrFail();
        $post->downloads = $post->downloads + 1;
        $post->save();
     }
    public function download($id){
        $post = post::where('id', $id)->firstOrFail();
        $post->downloads = $post->downloads + 1;
        $post->save();
        $path = public_path(). '/storage/'. $post->image;
        return response()->download($path, $post->original_filename, ['Content-Type' => $post->mime]);
     }
     public function multifileupload()
    {
        return view('vandor.mail.html.message');
    }

    public function store(Request $request)
    {

    	$image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $upload_success = $image->move(public_path('images'),$imageName);

        if ($upload_success) {
            return response()->json($upload_success, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error', 400);
        }
    }
    public function artists(Request $request,$posted_by)
    {
        //$artists =post::find($posted_by);
        $categories =category::all();
        $tags =tag::all();
        $artists = post::where('posted_by', '=', $posted_by )->orderBy('created_at','DESC')
        ->select(['posts.*','users.id AS user_id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);
        return view('user.artists',compact('artists','categories','tags', 'theme'));
    }
}
