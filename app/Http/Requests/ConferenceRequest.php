<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'speakers' => ['required'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'address' => ['required'],
        ];
    }
}
