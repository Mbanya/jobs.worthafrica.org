<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HireFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->id=='2')
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
            'organisation_name'=>'required',
            'organisation_size'=>'required',
            'organisation_type'=>'required',
            'Physical_Address'=>'required',
            'email'=>'required|email',
            'key_qualification'=>'required|max:255',
            'Qualification_Description'=>'nullable|max:255',
            'experience'=>'required',
            'Responsibilities'=>'nullable|max:255',
            'skills'=>'nullable|max:255',
            'minSal'=>'numeric|nullable',
            'maxSal'=>'numeric|nullable',
            'Frequency_Rate'=>'required',
            'start_date'=>'required|date'
        ];
    }
}
