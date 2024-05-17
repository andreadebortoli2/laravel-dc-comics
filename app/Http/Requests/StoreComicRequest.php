<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|unique:comics|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:20',
        ];
    }
}
