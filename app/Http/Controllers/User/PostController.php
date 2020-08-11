<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\User;
use App\Model\user\like;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use App\Model\user\theme;
use App\Model\user\category_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use ZipArchive;


class PostController extends Controller
{
    public function post(post $post)
    {
    	$categories =category::all();
        $theme =theme::all();
        $tags =tag::all();
        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('visit_count');
            Session::put($blogKey,1);
        }

        $post = post::where('status',1)->orderBy('created_at')
        ->select(['posts.*','users.id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')->first();
        //dd($post);

        return view('user.post') ->withPost($post)->withTags($tags)->withCategories($categories)->withTheme($theme);
    }

    public function getAllPosts()
    {
		return $posts = post::with('likes')->where('status',1)->orderBy('created_at','DESC')->paginate(6);
    }

    public function saveLike(request $request)
    {
    	$likecheck = like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->first();
    	if ($likecheck) {
    		like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->delete();
    		return 'deleted';
    	}else{
	    	$like = new like;
	    	$like->user_id = Auth::id();
	    	$like->post_id = $request->id;
	    	$like->save();
    	}
    }
    public function tag(tag $tag)
    {
        $categories =category::all();
        $tags =tag::all();
        $theme =theme::all();
        $posts = $tag->posts();
        return view('user.blog',compact('posts','categories', 'tags', 'theme'));
    }
	public function category(category $category)
    {
        $categories =category::all();
        $tags =tag::all();
        $post = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')->first();
        $posts = $category->posts();
        return view('user.category',compact('posts','categories', 'tags','post'));
    }


}
