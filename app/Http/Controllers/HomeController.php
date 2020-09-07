<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\User;
use App\Model\user\tag;
use App\Model\user\theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $categories =category::all();
        $tags =tag::all();
        $theme =theme::all();
        $posts = post::where('status',1)->orderBy('created_at','DESC')
        ->select(['posts.*','users.id','users.name','users.avatar'])
        ->join('users','users.id','=','posts.posted_by')
        ->paginate(6);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts','categories','tags', 'theme'))->render();

            return response()->json(['html'=>$view]);

        }
        return view('home',compact('posts','categories','tags', 'theme'));
    }

    public function users()

    {

        $users = User::get();
        $theme =theme::all();

        return view('users', compact('users','theme'));

    }


    /**

     * Show the application of itsolutionstuff.com.

     *

     * @return \Illuminate\Http\Response

     */

    public function user($id)

    {

        $user = User::find($id);
        $theme =theme::all();
        return view('usersView', compact('user','theme'));

    }


    /**

     * Show the application of itsolutionstuff.com.

     *

     * @return \Illuminate\Http\Response

     */

    public function ajaxRequest(Request $request){


        $user = User::find($request->user_id);

        //$response = auth()->user()->toggleFollow($user);


        //return response()->json(['success'=>$response]);

    }
    public function likeStore(Request $request,$id)
    {
       /* $this->validate($request,[

            'like' => 'nullable',
            ]);
        $post = post::find($id);
        $post->llke = $post->like + 1;
        $post->save();*/

        return redirect(route('submitPhoto'));
    }
}

