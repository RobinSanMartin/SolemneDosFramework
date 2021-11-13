<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'sucursal_code' => 'required|integer|numeric',
            'category' => 'required|integer|numeric',
            'product_code' => 'required|string|max:45',
            'amount' => 'required|integer|numeric',
            'sale_price' => 'required|integer|numeric',
            'description' => 'nullable|sometimes|string|max:255',
            'sucursal_id' => 'required|integer|numeric'
        ];
    }
}
