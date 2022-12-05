<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompletedChallengeRequest extends FormRequest
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
            'challenge_id' => 'required|exists:challenges,id',
            'media_path' => isset($this->media_path) ? 'max:255' : '',
            'media_caption' => isset($this->media_caption) ? 'max:255' : '',
            'points' => isset($this->points) ? 'required|numeric|max:256' : '',
        ];
    }
}
