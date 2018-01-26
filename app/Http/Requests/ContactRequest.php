<?php

namespace yoda\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'nomContact' => 'bail|required|between:3,30|alpha',
                'emailContact' => 'bail|required|email',
                'textContact' => 'bail|required|max:500'
        ];
    }
}
