<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoldingUpdateRequest extends FormRequest
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
            'spouse_name' => 'required',
             'gender' => 'required',	
             'village' => 'required',
              'profession' => 'nullable',
           'id_no' => 'nullable',
               'holding_no' => 'nullable',
               'word_no' => 'required',
                   'house_type' => 'nullable',
                   'yearly_tax' => 'nullable' , 
                   'opinion' => 'nullable',
                   'type_id' => 'nullable'
        ];
    }
}
