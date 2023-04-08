<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopStoreRequest extends FormRequest
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
            'organization' => 'required|unique:shops',
            'name' => 'required',
            'father' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'budget' => 'nullable',
            'annually_tax' => 'required',
            'opinion' => 'nullable',
            'type_id' => 'required',
            'user_id' => 'required'
        ];
    }
}
