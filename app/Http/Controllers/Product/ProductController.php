<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Product as ProductResource;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Products listened successfully', 'data' => $products, ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::findOrFail( $bar_code );
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Product created successfully', 'data' => $product, ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'bar_code' => 'required',
            'title' => 'required',
            'release_dt' => 'required',
            'cover' => 'required',
            'price' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $product = new Product;
        $product->bar_code = $request->input('bar_code');
        $product->title = $request->input('title');
        $product->release_dt = $request->input('release_dt');
        $product->cover = $request->input('cover');
        $product->price = $request->input('price');

        if( $product->save() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Product registered successfully', 'data' => $product, ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $bar_code
     * @return \Illuminate\Http\Response
     */
    public function show($bar_code)
    {
        $product = Product::find($bar_code);
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Product listened successfully', 'data' => $product, ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $bar_code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $bar_code)
    {
        $product = Product::findOrFail( $request->bar_code );
        $request->input('cnpj') != null ? $product->cnpj = $request->input('cnpj') : $request->cnpj = $product->cnpj;
        $request->input('title') != null ? $product->title = $request->input('title') : $request->title = $product->title;
        $request->input('cover') != null ? $product->cover = $request->input('cover') : $request->cover = $product->cover;
        $request->input('release_dt') != null ? $product->release_dt = $request->input('release_dt') : $request->release_dt = $product->release_dt;
        $request->input('price') != null ? $product->price = $request->input('price') : $request->price = $product->price;

        if( $product->save() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Product updated successfully', 'data' => $product, ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $bar_code
     * @return \Illuminate\Http\Response
     */
    public function destroy($bar_code)
    {
        $product = Product::findOrFail( $bar_code );
        if( $product->delete() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Product deleted successfully', 'data' => $product, ]);
        }
    }
}
