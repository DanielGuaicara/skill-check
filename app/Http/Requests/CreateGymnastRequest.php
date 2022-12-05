<?php

namespace App\Http\Requests;

use App\Rules\NotNumerical;
use Illuminate\Foundation\Http\FormRequest;

class CreateGymnastRequest extends FormRequest
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
            'first_name' => ['required', new NotNumerical(), 'max:45'],
            'last_name' => ['required', new NotNumerical(), 'max:45'],
            'birth_date' => 'required|date',
            'password' => 'required',
            'class_id' => 'required',
        ];
    }
}
