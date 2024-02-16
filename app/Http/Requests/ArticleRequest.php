<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|max:50',
            'description' => 'required|max:150',
            'category' => 'required|max:20'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => 'Il titolo deve avere massimo 50 caratteri',
            'description.required' => 'La descrizione deve essere inserita',
            'description.max' => 'La descrizione deve avere massimo 150 caratteri',
            'category.required' => 'La categoria deve essere inserita',
            'category.max' => 'La categoria deve avere massimo 20 caratteri'
        ];
    }
}