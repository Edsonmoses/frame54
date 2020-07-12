<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\theme;
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
        $featured = Post::with('featured')->orderBy('created_at','DESC');
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
        $posts = $category->posts();
        return view('user.blog',compact('posts','categories','tags','theme'));
    }

    public function Guidelines(Request $request)
    {
    	return view('user.guidelines');
    }

    public function License(Request $request)
    {

    	return view('user.license');
    }
    public function Policy(Request $request)
    {

    	return view('user.policy');
    }

}
