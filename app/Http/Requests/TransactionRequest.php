<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'pickup_time' => 'required',
            'request_type' => 'required|numeric',
            'price' => 'required|numeric',

        ];
    }

    public function response(array $errors)
    {
        return response()->json([
            'code' => 500,
            'message' => 'Failed to complete your request',
            'errors' => $errors
        ]);
    }
}
