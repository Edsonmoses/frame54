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
        ->select(['posts.*','users.id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);
        //dd($theme);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts','categories','tags', 'theme'))->render();

            return response()->json(['html'=>$view]);

        }

    	return view('user.blog',compact('posts','categories','tags', 'theme'));
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
        ->select(['posts.*','users.id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')->first();
        $posts = $category->posts();
        //dd($post);
        return view('user.category',compact('posts','categories','tags','post'));
    }

    public function Guidelines(Request $request)
    {
    	return view('user.guidelines');
    }

    public function frameLicense()
    {

    	return view('user.license');
    }
    public function framePolicy()
    {

    	return view('user.policy');
    }

    public function Conditions()
    {

    	return view('user.conditions');
    }
    public function developers()
    {

    	return view('user.developers');
    }
    public function about(Request $request)
    {
        $categories =category::all();
        $tags =tag::all();
        $posts = post::all();
        //dd($theme);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts','categories','tags'))->render();

            return response()->json(['html'=>$view]);

        }

    	return view('user.about',compact('posts','categories','tags', 'theme'));
    }
    public function blog()
    {

    	return view('user.blogs_full');
    }
    public function team()
    {

    	return view('user.team');
    }
    public function press()
    {

    	return view('user.press');
    }
    public function help()
    {

    	return view('user.help');
    }
    public function security()
    {

    	return view('user.security');
    }
    public function likes($like){
        $post = post::where('like', $like)->firstOrFail();
        $post->downloads = $post->downloads + 1;
        $post->save();
     }
    public function download($image){
        $post = post::where('image', $image)->firstOrFail();
        $post->downloads = $post->downloads + 1;
        $post->save();
        $path = public_path(). '/storage/'. $post->image;
        return response()->download($path, $post->original_filename, ['Content-Type' => $post->mime]);
     }
}
