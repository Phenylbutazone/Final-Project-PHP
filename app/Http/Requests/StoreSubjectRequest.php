<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
        return [
            'code' => ['required', 'string', 'max:255', 'unique:subjects,code'],
            'title' => ['required', 'string', 'max:255'],
            'unit' => ['required', 'integer', 'min:1'],
        ];
    }
}
