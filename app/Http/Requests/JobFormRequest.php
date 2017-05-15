<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobFormRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=> 'required',
            'phone_number'=> 'required',
            'key_qualification'=> 'required',
            'other_key_qualification'=>'required',
            'experience'=>'required',
            'skills'=> 'required',
            'CV' =>'mimes:pdf,doc,docx|max:2000',
            'cover_letter'=>'mimes:pdf,doc,docx|max:2000',
        ];
    }
}
