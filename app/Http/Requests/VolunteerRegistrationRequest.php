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
            'phone' => 'required|digits:11',
            'occupation' => 'required',
            'address' => 'required|min:50',
            'accept' => 'required|'
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
            'address.required' => 'Address cannot be empty',
            'address.min' => 'Write at least 50',
            'phone.required' => 'Phone number cannot be empty',
            'phone.digits' => 'Phone number must be number with length 10'
        ];
    }
}
