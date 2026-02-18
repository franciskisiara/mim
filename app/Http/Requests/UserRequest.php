<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'EmployeeID' => [
                'required',
                Rule::unique('users'),
            ],

            'FirstName' => [
                'nullable',
                'string',
                'max:50',
            ],

            'LastName' => [
                'nullable',
                'string',
                'max:50',
            ],

            'Email' => [
                'required',
                Rule::unique('users'),
            ],
        ];
    }
}
