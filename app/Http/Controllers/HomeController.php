<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(6);
        if ($request->ajax()) {

    		$view = view('user.data',compact('posts'))->render();

            return response()->json(['html'=>$view]);

        }
    	return view('home',compact('posts'));
    }
}
