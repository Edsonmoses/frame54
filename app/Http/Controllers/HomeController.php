<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
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
}
