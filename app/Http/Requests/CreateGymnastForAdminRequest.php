<?php

namespace App\Http\Requests;

use App\Rules\OnlyLetters;
use Illuminate\Foundation\Http\FormRequest;

class CreateGymnastForAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', new OnlyLetters()],
            'last_name' => ['required', new OnlyLetters()],
            'birth_date' => 'required|date',
            'class_id' => 'required',
            'user_id' => 'required|exists:users,id',
        ];
    }
}
