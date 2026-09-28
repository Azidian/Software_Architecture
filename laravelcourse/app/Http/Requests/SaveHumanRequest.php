<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveHumanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'aura' => 'required|integer|min:0',
            'hierarchy' => 'required|string|in:common,moderate,legendary',
        ];
    }
}
