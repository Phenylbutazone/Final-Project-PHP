<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return in_array($this->user()->account_type, ['admin', 'staff'], true);
    }

    /**
     * @return array<string, array<int, \Illuminate\Contracts\Validation\ValidationRule|string>>
     */
    public function rules(): array
    {
        $program = $this->route('program');

        return [
            'code' => [
                'required',
                'string',
                'max:255',
                Rule::unique('programs', 'code')->ignore($program->id),
            ],
            'title' => ['required', 'string', 'max:255'],
            'years' => ['required', 'integer', 'min:0'],
        ];
    }
}
