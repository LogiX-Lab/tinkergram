<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostRestController extends Controller
{
        //
        public function index()
        {
            return Post::all();
        }

        public function get( Post $post) {
            return $post;
        }

        public function create( Request $request )
        {
            $post = Post::create ( $request -> all() );

            return response() -> json ( $post, 201);
        }

        public function update( Request $request, Post $post)
        {
            $post -> update( $request->all() );
            return response() -> json ( $post, 200);
        }

        public function delete ( Post $post )
        {
            $post-> delete();
            return response() -> json ( null, 204);

        }
}
