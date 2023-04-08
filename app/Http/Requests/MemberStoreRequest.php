<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberStoreRequest extends FormRequest
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
            'name' => 'required',
             'designation' => 'required',
              'department' => 'nullable',
               'branch' => 'nullable',
                'mobile' => 'required|unique:members',
                 'email' => 'nullable|unique:members',
                  'image' => 'nullable', 
                  'sequence' => 'nullable', 
                  'status' => 'nullable',
        ]; 
    }
}
