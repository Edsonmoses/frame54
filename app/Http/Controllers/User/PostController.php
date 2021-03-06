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
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use ZipArchive;


class PostController extends Controller
{
    public function post(post $post)
    {
    	$categories =category::all();
        $theme = theme::where('status', 1)->firstOrFail();
        $tags =tag::all();
        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('visit_count');
            Session::put($blogKey,1);
        }

        $post = post::where('status',1)
        ->where('posts.id','=',$post->id)
        ->orderBy('created_at')
        ->select(['posts.*','users.id AS user_id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')->first();

        //dd($post);
        return view('user.post') ->withPost($post)->withTags($tags)->withCategories($categories)->withTheme($theme);
    }

    public function getAllPosts()
    {
        $theme = theme::where('status', 1)->firstOrFail();
		return $posts = post::with('likes')->where('status',1)->orderBy('created_at','DESC')->paginate(6);
    }
    public function getSponsored ()
    {
        return $sponsored = post::with('sponsored_images')->where('status',1)->orderBy('created_at','DESC')->paginate(1);
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
        $theme = theme::where('status', 1)->firstOrFail();
        $posts = $tag->posts();
        return view('user.blog',compact('posts','categories', 'tags', 'theme'));
    }
	public function category(category $category)
    {
        $categories =category::all();
        $tags =tag::all();
        $theme = theme::where('status', 1)->firstOrFail();
        $post = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id AS user_id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')->first();
        $posts = $category->posts();
        return view('user.category',compact('posts','categories', 'tags','post','theme'));
    }
    public function likeUpdate($id)
    {
        $posts = post::where('id', $id)->firstOrFail();
        $posts->like = $posts->like + 1;
        $posts->save();
        return redirect(route('home'));
    }

     public function users()
     {
         $users = User::get();
         $theme = theme::where('status', 1)->firstOrFail();
         return view('user.users', compact('users','theme'));
     }

     public function user($id)
     {
         $user = User::find($id);
         $theme = theme::where('status', 1)->firstOrFail();
         return view('user.usersView', compact('user','theme'));
     }
     public function follwUserRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);


        return response()->json(['success'=>$response]);
    }

}
