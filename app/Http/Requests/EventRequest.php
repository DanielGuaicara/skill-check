<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class EventRequest extends FormRequest
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
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function failedValidation(Validator $validator)
    {
        $response = new JsonResponse($validator->errors(), 422);
        throw new ValidationException($validator, $response);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();
        $id = $method === 'POST' ? '' : $this->route()->parameters['id'];
        $gymId = $this->route()->parameters['gymId'];
        return [
            'name' => [
                'required',
                Rule::unique('events')->where('gym_id', $gymId)->ignore($id),
            ],
            'abbrev' => [
                'required',
                Rule::unique('events')->where('gym_id', $gymId)->ignore($id),
            ],
        ];
    }
}
