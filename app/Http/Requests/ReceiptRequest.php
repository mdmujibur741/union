<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceiptRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "sender_name" => 'required',
            'receiver_name' => 'required',
            'receiver_contact' => 'required',
             'purpose' => 'nullable', 
             'amount' => 'required',
             'amount_in_word' => 'nullable',
             'date' => 'required',
             'remark' => 'nullable',
        ];
    }
}
