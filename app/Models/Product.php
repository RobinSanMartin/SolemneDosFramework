<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function search($input){
        $product = new self();
        if(isset($input['name'])){
            $product = $product->where('name',$input['name']);
        }
        if(isset($input['product_code'])){
            $product = $product->where('product_code',$input['product_code']);
        }
        if(isset($input['sucursal_id'])){
            $product = $product->where('sucursal_id',$input['sucursal_id']);
        }
        
        return $product->get();
    }
}