<?php

namespace App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "string|required",
            "description" => "string|required",
            "height" => "numeric|required",
            "length" => "numeric|required",
            "width" => "numeric|required",
            "price" => "numeric|required",
            "weight" => "numeric|required",
            "sku" => "string|required",
            "stock" => "numeric|required",
            "category_id" => "int|exists:categories,id|required",
            "provider_integration_id" => "int|exists:integrations,id",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = new Response(['error' => $validator->errors()->first()], 422);
        throw new ValidationException($validator, $response);
    }
}
