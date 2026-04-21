<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSubjectRequest extends FormRequest
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
        $subject = $this->route('subject');

        return [
            'code' => [
                'required',
                'string',
                'max:255',
                Rule::unique('subjects', 'code')->ignore($subject->id),
            ],
            'title' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'integer', 'min:1', 'max:6'],
        ];
    }
}
