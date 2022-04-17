<?php

namespace App\Http\Requests;

use App\Models\Profile;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMember extends FormRequest
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
            'phone' => 'required|min:10',
            'profession' => 'required|min:7',
            'locale' => [
                'required',
                Rule::in(array_keys(Profile::LOCALES))
            ],
            'fb_link' => '',
            'instagram_link' => '',
            'twitter_link' => '',
            'pinterest_link' => '',
            'file' => 'image',
            'user_id' => 'required|int'
        ];
    }
}
