<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cat_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'brand_id' => 'required',
            'buy_price' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'sku' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'cat_id.required' => 'Category name field is required',
            'name.required' => 'Product name field is required',
            'brand_id.required' => 'Brand name field is required',
            'buy_price.required' => 'Buy price field is required',
            'price.required' => 'Sale price field is required',
            'qty.required' => 'Quantity field is required',
            'sku.required' => 'SKU  field is required',
            'short_description.required' => 'short description  field is required',
            'long_description.required' => 'long description  field is required',
        ];
    }
}
