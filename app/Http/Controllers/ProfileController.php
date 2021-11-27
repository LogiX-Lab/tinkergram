<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ILLuminate\Support\Facades\Auth;

use App\Models\Profile;
use App\Models\Post;


class ProfileController extends Controller
{
    //
    public function index() {
        $user = Auth::user();

        if ( is_null( $user))
            return redirect('/login');

        $profile = Profile::where('user_id', $user->id)->orderBy('id', 'desc')->first();
        if ( is_null($profile))
            return create();

        $posts = \App\Models\Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $numPosts = \App\Models\Post::where('user_id', $user->id)->count();

        // error here. This should be profile instead of profile.index
        return view( 'profile', [
            'user' => $user,
            'profile' => $profile,
            'posts' => $posts,
            'numPosts' => $numPosts
        ] );
    }



    public function create(){
        $user = Auth::user();

        if ( is_null( $user))
            return redirect('/login');

        return view('createProfile');
    }

    public function postCreate() {
        $user = Auth::user();

        if ( is_null( $user))
            return view('welcome');

        $data = request()->validate([
            'description' => 'required',
            'profilepic' => ['required', 'image'],
        ]);

        // store the image in uploads, under public
        // request(‘profilepic’) is like $_GET[‘profilepic’]
        $imagePath = request('profilepic')->store('uploads', 'public');

        // create a new profile, and save it
        // $user = Auth::user();

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->description = request('description');
        $profile->image = $imagePath;
        $saved = $profile->save();

        // if it saved, we send them to the profile page
        if ($saved) {
            return redirect('/profile');
        }

    }

    public function edit()
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('editProfile', [
            'profile' => $profile
        ]);
    }

    public function postEdit($id)
    {
        $data = request()->validate([
            'description' => 'required',
            'profilepic' => 'image',
        ]);
        // Load the existing profile
        $user = Auth::user();

        // Find the corresponding profile with the $id,
        // Create a new profile if its empty
        $profile = Profile::find($id);
        if(empty($profile)){
            $profile = new Profile();
            $profile->user_id = $user->id;
        }
        $profile->description = request('description');
        // Save the new profile pic... if there is one in the request()!
        if (request()->has('profilepic')) {
            $imagePath = request('profilepic')->store('uploads', 'public');
            $profile->image = $imagePath;
        }
        // Now, save it all into the database
        $updated = $profile->save();
        if ($updated) {
            return redirect('/profile');
        }
    }




}
