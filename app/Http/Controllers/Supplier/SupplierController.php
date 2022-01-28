<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Resources\Supplier as SupplierResource;
use Validator;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Suppliers listened successfully', 'data' => $suppliers, ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $supplier = Supplier::findOrFail( $cnpj );
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Supplier created successfully', 'data' => $supplier, ]);
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
            'cnpj' => 'required|min:14|max:14',
            'name' => 'required|min:5|max:50',
            'email' => 'required|email',
            'logo' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $supplier = new Supplier;
        $supplier->cnpj = $request->input('cnpj');
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->logo = $request->input('logo');

        if( $supplier->save() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Supplier created successfully', 'data' => $supplier, ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cnpj
     * @return \Illuminate\Http\Response
     */
    public function show($cnpj)
    {
        $supplier = Supplier::find($cnpj);
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Supplier listened successfully', 'data' => $supplier, ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $cnpj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cnpj)
    {
        $supplier = Supplier::findOrFail( $request->cnpj );
        $request->input('cnpj') != null ? $supplier->cnpj = $request->input('cnpj') : $request->cnpj = $supplier->cnpj;
        $request->input('name') != null ? $supplier->name = $request->input('name') : $request->name = $supplier->name;
        $request->input('email') != null ? $supplier->email = $request->input('email') : $request->email = $supplier->email;
        $request->input('logo') != null ? $supplier->logo = $request->input('logo') : $request->logo = $supplier->logo;

        if( $supplier->save() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Supplier updated successfully', 'data' => $supplier, ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $cnpj
     * @return \Illuminate\Http\Response
     */
    public function destroy($cnpj)
    {
        $supplier = Supplier::findOrFail( $cnpj );
        if( $supplier->delete() ){
            return response()
                ->json([ 'success' => true, 'code' => 200 , 'message' => 'Supplier deleted successfully', 'data' => $supplier, ]);
        }
    }
}
