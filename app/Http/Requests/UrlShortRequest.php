<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlShortRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'url' => 'required|url:https,http'
        ];
    }

    public function messages(): array
    {
        return [
            'url.required' => __('errors.required'),
            'url.url' => __('errors.invalid')
        ];
    }
}
