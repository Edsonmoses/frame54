<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\User;
use App\Model\user\like;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
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
        $tags =tag::all();
         /* dd($post->category->id);
        $related= DB::table('category_posts')
        ->where('category_id', '=', $post->category->id)
            ->where('post_id', '!=', $post->id)
            ->join('posts','posts.id','=','category_posts.post_id')
            ->join('categories','category_posts.category_id','=','category_posts.post_id')
            
            ->get();
            dd($related);*/
            $related = Post::whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('categories.id', $categories);
            })->where('id', '<>', $post->id)->get();
            //dd($related);
        //return view('user.post',compact('post','categories', 'tags','related'));
        return view('user.post') ->withPost($post)->withTags($tags)->withCategories($categories)->withRelated($related);
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
        $posts = $tag->posts();
        return view('user.blog',compact('posts','categories', 'tags'));
    }
	public function category(category $category)
    {
        $categories =category::all();
        $tags =tag::all();
        $posts = $category->posts();
        return view('user.blog',compact('posts','categories', 'tags'));
    }
 

}
