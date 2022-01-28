<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Resources\Client as ClientResource;
use Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Clients listened successfully', 'data' => $clients, ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::findOrFail( $cpf );
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Client created successfully', 'data' => $client, ]);
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
            'cpf' => 'required',
            'name' => 'required',
            'dt_birth' => 'required',
            'sex' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $client = new Client;
        $client->cpf = $request->input('cpf');
        $client->name = $request->input('name');
        $client->dt_birth = $request->input('dt_birth');
        $client->sex = $request->input('sex');

        if( $client->save() ){
            return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Client registered successfully', 'data' => $client, ]);
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
        $client = Client::find($cpf);
        return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Client listened successfully', 'data' => $client, ]);
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
        $client = Client::findOrFail( $request->cpf );
        $request->input('name') != null ? $client->name = $request->input('name') : $request->name = $client->name;
        $request->input('dt_birth') != null ? $client->dt_birth = $request->input('dt_birth') : $request->dt_birth = $client->dt_birth;
        $request->input('sex') != null ? $client->sex = $request->input('sex') : $request->sex = $client->sex;

        if( $client->save() ){
            return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Client updated successfully', 'data' => $client, ]);
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
        $client = Client::findOrFail( $cpf );
        if( $client->delete() ){
            return response()
            ->json([ 'success' => true, 'code' => 200 , 'message' => 'Client deleted successfully', 'data' => $client, ]);
        }
    }
}
