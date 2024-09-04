<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'image' =>['nullable', 'image', 'max:3000'],
            'offer' =>['nullable', 'max:255', 'string'],
            'title' =>['required', 'max:255'],
            'sub_title' =>['required', 'max:255' ,'string'],
            'short_description' =>['required', 'max:250'],
            'button_link' =>[ 'nullable'],
            'status' =>['boolean']
        ];
    }
}
