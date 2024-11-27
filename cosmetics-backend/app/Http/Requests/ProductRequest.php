<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest as BaseRequest;

class ProductRequest extends BaseRequest
{
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'product_description' => 'required|string',
            'product_category' => 'required|string',
            'directions' => 'required|string',
            'in_stock' => 'required|numeric',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
