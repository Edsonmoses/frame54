<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     *
     */
    public function index(Request $resquest)
    {

        $term =  $resquest->query->get('term');
        $term = $term ? $term : '';

        $posts = DB::table('posts')
             ->select(['posts.id','posts.title','posts.subtitle','posts.image','categories.name','users.id','users.name','users.avatar'])
             ->where('title' ,'LIKE' ,"%{$term}%")
             ->orWhere('subtitle' ,'LIKE' ,"%{$term}%")
             ->join('category_posts','posts.id','=','category_posts.post_id')
             ->join('categories','category_posts.category_id','=','categories.id')
             ->join('users','users.id','=','posts.posted_by')
             ->orWhere('categories.name','LIKE',"%{$term}%")
             ->get();

            /* return response()->json($post);*/

             return view('user.blog',['posts' => $posts]);



    }
}
