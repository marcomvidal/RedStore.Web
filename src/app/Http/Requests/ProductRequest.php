<?php

namespace App\Http\Requests;

use App\Rules\SkuFormatRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'          => ['required', 'min:2', 'max:50'],
            'sku'           => ['required', 'size:8', 'unique:products', new SkuFormatRule],
            'description'   => ['required', 'min:2'],
            'price'         => ['required', 'min:0', 'numeric']
        ];
    }
}
