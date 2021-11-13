<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateProductRequest;
use App\Http\Requests\Api\IndexProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexProductRequest $request)
    {
        $input = $request->validated();
        $rows = Product::search($input);
        return response()->json(['message'=>'Datos obtenidos','data'=>$rows]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->sucursal_code = $request->input('sucursal_code');
        $product->category = $request->input('category');
        $product->product_code = $request->input('product_code');
        $product->amount = $request->input('amount');
        $product->sale_price = $request->input('sale_price');
        $product->description = $request->input('description');
        $product->sucursal_id = $request->input('sucursal_id');
        $product->save();

        return response()->json(['message'=>'Datos guardados correctamente', 'data'=>$product]);
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
