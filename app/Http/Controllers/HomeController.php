<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ILLuminate\Support\Facades\Auth;
use App\Models\Profile;

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
    public function index()
    {
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
        ] );;
    }
}
