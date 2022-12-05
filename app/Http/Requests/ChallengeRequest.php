<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class ChallengeRequest extends FormRequest
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
        if ($method === 'POST') {
            return [
                'name' => 'required|max:45',
                'description' => 'required|max:16777215',
                'points' => 'required|numeric|max:256',
                'class_id' => isset($this->class_id) ? 'exists:classes,id' : '',
                'is_featured' => isset($this->is_featured) ? 'boolean' : '',
                'featured_date' => isset($this->featured_date) ? 'date' : '',
            ];
        }
        if ($method === 'PUT') {
            return [
                'is_featured' => isset($this->is_featured) ? 'boolean' : '',
                'featured_date' => isset($this->featured_date) ? 'date' : '',
            ];
        }
    }
}
