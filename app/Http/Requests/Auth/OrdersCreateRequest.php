<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersCreateRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'field1' => 'required',
            'field2' => 'numeric',
            // Add more validation rules as per your requirements
        ];
    }
}
