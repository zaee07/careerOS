<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'instution_name' => ['required', 'string', 'max:255'],

            'degree' => ['required', 'string', 'max:255'],

            'location' => ['nullable', 'string', 'max:255'],

            'field_of_study' => [
                'nullable',
                'string',
                'max:100',
            ],

            'start_year' => [
                'required',
                'integer',
                'digits:4',
                'between:1900,' . date('Y'),
            ],

            'end_year' => [
                'nullable',
                'integer',
                'digits:4',
                'between:1900,' . date('Y'),
                'after_or_equal:start_year',
            ],

            'is_current' => [
                'boolean',
            ],

            'description' => [
                'nullable',
                'string',
            ],
        ];
    }
}
