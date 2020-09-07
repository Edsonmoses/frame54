<?php

namespace App\Http\Controllers\User;

use App\Model\user\User;
use App\Model\admin\admin;
use App\Model\admin\profile;
use App\Model\admin\role;
use App\Model\user\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\user\theme;

use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($id)
    {
        $user = User::find($id);
        $post =post::find($id);
        $theme =theme::all();

        if($user){
            return view('user.profile.profile')->withUser($user)->withPost($post)->withTheme($theme);
        }else{
            return redirect()->back();
        }

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
            'name' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'portfolio' => 'required|string|max:255',
            'interests' => 'required|string|max:5',
            'bio' => 'required|string',
            'location' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string',
            'paypal' => 'required|string',
            'message' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $request['password'] = bcrypt($request->password);
        $user = admin::create($request->all());
        $user = profile::create($request->all());
        $user->roles()->sync($request->role);
        return redirect(route('user.submitPhoto'));
    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      $user = profile::find($id);
      $profile = profile::all();
      $user = admin::find($id);
      $roles = role::all();
      $theme =theme::all();
      return view('user.profile.profileEdit',compact('user','profile','theme'))->with('success', 'Your Image has been added successfully. Please wait for the admin to approve.');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, $id){
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'portfolio' => 'required|string|max:255',
            'interests' => 'required|string|max:5',
            'bio' => 'required|string',
            'location' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string',
            'paypal' => 'required|string',
            'message' => 'required|string',
        ]);

        $user = profile::where('id',$id)->update($request->except('_token','_method'));
        return redirect(route('profile.profile'))->with('message','User updated successfully');

    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'portfolio' => 'required|string|max:255',
            'interests' => 'required|string|max:5',
            'bio' => 'required|string',
            'location' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string',
            'paypal' => 'required|string',
            'message' => 'required|string',
        ]);

        $user = profile::where('id',$id)->update($request->except('_token','_method'));
        return redirect(route('profile.profile'))->with('message','User updated successfully');
    }
    public function updateAvatar(Request $request)
    {
        $theme =theme::all();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(200, 200)->save(public_path('/uploads/avatars/'.$filename));
        }
        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();

        return view('user.profile.profile')->withUser($user)->withTheme($theme);

    }

    public function showChangePasswordForm(){
        $theme =theme::all();
        return view('user.profile.changepassword')->withTheme($theme);
    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $this->validate($request, [
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }
    public function closed(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $this->validate($request, [
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->email = $request->enail;
        $user->verified = $request->verified;
        $user->save();
        Auth::logout();

        return redirect('/home')->with("success","Account has been deactivated successfully !");

    }

    public function analytics($id)
    {
        $user = User::find($id);
        $post =post::find($id);
        $theme =theme::all();

        if($user){
           // $posts =post::all();
            return view('user.profile.analytics')->withUser($user)->withPost($post)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function settings($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.profile.settings')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function emailSetting($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.profile.emailSetting')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function updateEmail(Request $request)
    {

    }
    public function connect($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.profile.connect')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function applications($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.profile.applications')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function close($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.profile.close')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function collections($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.collections')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function community($id)
    {
        $user = User::find($id);
        $theme =theme::all();

        if($user){

            return view('user.community')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }
    public function following($id)
    {
        $user = User::find($id);
        $post =post::find($id);
        $theme =theme::all();

        if($user){

            return view('user.profile.following')->withUser($user)->withPost($post)->withTheme($theme);
        }else{
            return redirect()->back();
        }

    }

    public function like(Request $request, $id)
    {
        $this->validate($request,[
            'like' => 'required|string|max:255'
        ]);
        $post = post::where('id', $id)->firstOrFail();
        $post->email = $request->enail;
        $post->save();
        return redirect('/home')->with("success","Account has been deactivated successfully !");
    }
    public function likes(Request $request, $id){
        $post = post::find($id);
        $post->like = $request->like + 1;
        $post->save();
     }

}
