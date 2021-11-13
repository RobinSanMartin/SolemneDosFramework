<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateSucursalRequest;
use App\Http\Requests\Api\IndexSucursalRequest;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexSucursalRequest $request)
    {
        $input = $request->validated();
        $rows = Sucursal::search($input);
        return response()->json(['message'=>'Datos obtenidos','data'=>$rows]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSucursalRequest $request)
    {
        $sucursal = new Sucursal();
        $sucursal->name = $request->input('name');
        $sucursal->sucursal_code = $request->input('sucursal_code');
        $sucursal->save();

        return response()->json(['message'=>'Datos guardados correctamente', 'data'=>$sucursal]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
