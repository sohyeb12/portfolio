<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:250',
            'email' => 'required|string|nullable',
            'phone' => 'required|string',
            'Brief' => 'required|string|max:2500',
            'work' => 'required|string|min:3|max:250',
            'image' => 'nullable|image|dimensions:min_width=400,min-height:300|max:1024',
            'state' => 'required|string',
        ];
    }
}
