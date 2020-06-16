<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $categories =category::all();
        $tags =tag::all();
        $featured = Post::with('featured')->orderBy('created_at','DESC');
        //$posts = DB::table('posts')
       // ->select(['posts.*','users.id','users.name','users.avatar'])
      // ->join('users','users.id','=','posts.posted_by')
        //->paginate(6);
        $posts = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);
       // dd($posts);
        if ($request->ajax()) {

    		$view = view('user.data', compact('posts','categories'))->render();

            return response()->json(['html'=>$view]);

        }

    	return view('user.blog', compact('posts','categories'));
    }
    public function tag(tag $tag)
    {
        $categories =category::all();
        $tags =tag::all();
        $posts = $tag->posts();
        return view('user.blog',compact('posts','categories','tags'));
    }

    public function category(category $category)
    {
        $categories =category::all();
        $tags =tag::all();
        $posts = $category->posts();
        return view('user.blog',compact('posts','categories','tags'));
    }


}
