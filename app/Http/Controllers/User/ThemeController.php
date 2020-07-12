<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\theme;
use Illuminate\Http\Request;
use App\Http\Requests;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme =theme::all();
        return view('user.layouts.head',compact('theme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            ]);
        $theme = new theme;
        $theme->status = $request->status;
        $theme->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(theme $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, theme $theme, $id)
    {
        $this->validate($request,[

            ]);
        $theme = theme::find($id);
        $theme->status = $request->status;
        $theme->save();

        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(theme $theme)
    {
        //
    }
}
