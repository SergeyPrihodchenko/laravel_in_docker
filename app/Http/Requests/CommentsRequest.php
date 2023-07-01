<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'text' => 'required|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'name.requered' => 'Поле необходимо заполнить',
            'name.max' => 'Слишком много символов',
            'text.requered' => 'Поле необходимо заполнить'
        ];
    }
}
