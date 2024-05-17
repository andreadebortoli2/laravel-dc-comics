<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
        // dd($this->comic);
        return [
            'title' => ['required', 'max:100', Rule::unique('comics')->ignore($this->comic)],
            'description' => 'nullable',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:20',
        ];
    }
}
