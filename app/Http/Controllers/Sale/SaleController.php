<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Http\Resources\Sale as SaleResource;
use Validator;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Sales listened successfully', 'data' => $sales, ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = Sale::findOrFail( $cpf );
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Sale created successfully', 'data' => $sale, ]);
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
            'cpf' => 'required|min:11|max:11',
            'bar_code' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $sale = new Sale;
        $sale->cpf = $request->input('cpf');
        $sale->bar_code = $request->input('bar_code');

        if( $sale->save() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Sale created successfully', 'data' => $sale, ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cpf
     * @return \Illuminate\Http\Response
     */
    public function show($cpf)
    {
        $sale = Sale::find($cpf);
        return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Sale listened successfully', 'data' => $sale, ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cpf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cpf)
    {
        $sale = Sale::findOrFail( $request->cpf );
        $request->input('bar_code') != null ? $sale->bar_code = $request->input('bar_code') : $request->bar_code = $sale->bar_code;

        if( $sale->save() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Sale updated successfully', 'data' => $sale, ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cpf
     * @return \Illuminate\Http\Response
     */
    public function destroy($cpf)
    {
        $sale = Sale::findOrFail( $cpf );
        if( $sale->delete() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Sale deleted successfully', 'data' => $sale, ]);
        }
    }
}
