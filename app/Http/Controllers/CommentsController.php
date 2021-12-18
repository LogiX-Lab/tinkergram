<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Products;
use App\Models\Suppliers;

use Illuminate\Http\Request;
use ILLuminate\Support\Facades\Auth; // !!! add. Otherwise page got timeout

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();

        if ( is_null( $user))
            return redirect('/login');

        $articles = \App\Models\Comments::with(['user','product']);


        return view( 'newfood', [
            'user' => $user,
            'articles'=> $articles,
        ] );

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
        $user = Auth::user();

        if ( is_null( $user))
            return redirect('/login');

        $data = request()->validate([
            'food_name' => 'required',
            'food_image' => ['required', 'image'],
            'food_points' => 'required',
            'food_desc' => 'required',
            'name' => 'required', // Restaurant name
            'address' => 'required',
            'contact_info' => 'required',
            'url' => 'required',
            'caption' => 'required',

        ]);

        $supplier = new Suppliers();
            $supplier->name= request('name');
            $supplier->address= request('address');
            $supplier->contact_info= request('contact_info');
            $supplier->url= request('url');
            $supplier->caption= request('caption');
        $is_saved_supplier = $supplier->save();


        $product = new Products();
        $food_imagePath = request('food_image')->store('uploads', 'public');
            $product->name = request('food_name');
            $product->image_url = $food_imagePath;
            $product->type = 'food';
            //$product->description = request('food_desc');
            $product->supplier_id = $supplier->id;
        $is_saved_product = $product->save();


        $comment = new Comments();
            $comment->description = request('food_desc');
            $comment->points = request('food_points');
            $comment->product_id = $product->id;
            $comment->user_id = $user->id;

        $is_saved_comment = $comment->save();


        if ($is_saved_comment) {
            return view( 'newfoodsaved', [
                'user' => $user,
                'product' => $product,
                'comment' => $comment,
            ] );
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show($productID){
        $user = Auth::user();
        if ( is_null( $user))
            return redirect('/login');

        $product = Products::where('id', $productID)->first();
        $comment = Comments::where('product_id', $product->id)->where('user_id', $user->id)->first();


        return view('newfoodsaved', [
            'product' => $product,
            'user' => $user,
            'comment'=> $comment,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
