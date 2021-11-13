<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class IndexProductRequest extends FormRequest
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
            'name' => 'nullable|sometimes|string|max:255',
            'product_code' => 'nullable|sometimes|string|max:45',
            'sucursal_id' => 'nullable|sometimes|integer|numeric'
        ];
    }
}
