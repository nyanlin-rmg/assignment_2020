<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRegistrationRequest extends FormRequest
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
            'name' => 'required',
            'dob' => 'required|date',
            'nrc' => 'required',
            'father_name' => 'required',
            'occupation' => 'required',
            'address' => 'required',
            'accept' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name cannot be empty',
            'dob.required' => 'Date of birth cannot be empty',
            'nrc.required' => 'NRC number cannot be empty',
            'father_name.required' => 'Father name cannot be empty',
            'occupation.required' => 'Occupation cannot be empty',
            'address.required' => 'Address cannot be empty'
        ];
    }
}
