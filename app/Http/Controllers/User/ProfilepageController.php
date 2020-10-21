<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\User;
use App\Model\admin\profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Model\user\theme;

class ProfilepageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = User::find();
         $theme = theme::where('status', 1)->firstOrFail();

        if($user){

            return view('user.profile.profile')->withUser($user)->withTheme($theme);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'portfolio' => 'required|string|max:255',
            'interests' => 'required|string|max:5',
            'bio' => 'required|string',
            'location' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'paypal' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
        $profile = Profile::create($storeData);

        return redirect('/profile')->with('completed', 'Profile has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        $theme = theme::where('status', 1)->firstOrFail();
        return view('user.profile.profileEdit', compact('profile','theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|string|max:255',
            'last' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|numeric',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'portfolio' => 'required|string|max:255',
            'interests' => 'required|string|max:5',
            'bio' => 'required|string',
            'location' => 'required|string|max:255',
            'twitter' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'paypal' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
        Profile::whereId($id)->update($updateData);
        return redirect('/profile')->with('completed', 'Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect('/profile')->with('completed', 'Student has been deleted');
    }
    public function updateAvatar(Request $request)
    {
        $theme = theme::where('status', 1)->firstOrFail();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatar = time().'.'.$request->image->extension();
            $request->image->move(public_path('/uploads/avatars'), $avatar);
        }
        $user = Auth::user();
        $user->avatar = $avatar;
        $user->save();

        return view('user.profile.profile')->withUser($user)->withTheme($theme);
    }

    public function showChangePasswordForm(){
        $theme = theme::where('status', 1)->firstOrFail();
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
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }
}
