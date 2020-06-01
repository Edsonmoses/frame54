<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(6);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts'))->render();

            return response()->json(['html'=>$view]);

        }

    	return view('user.blog',compact('posts'));
    }
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('user.blog',compact('posts'));
    }

    public function categories(category $category) {
        $categories = Category::all();
        return view('user.blog',compact('categories'));
     }

}
