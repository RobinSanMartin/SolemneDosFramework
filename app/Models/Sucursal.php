<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    public static function search($input){
        $sucursal = new self();
        if(isset($input['name'])){
            $sucursal = $sucursal->where('name',$input['name']);
        }
        if(isset($input['sucursal_code'])){
            $sucursal = $sucursal->where('sucursal_code',$input['sucursal_code']);
        }
        return $sucursal->get();
    }
}
