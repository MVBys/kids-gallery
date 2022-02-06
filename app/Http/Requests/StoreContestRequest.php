<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContestRequest extends FormRequest
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
            'title'=> ['required','max:255'],
            'description'=> ['required'],
            'cover'=> ['required','mimes:jpg,png','max:2050'],
            'started_at'=> ['required','date','after:now'],
            'end_registration_at'=> ['required','date','after:started_at'],
            'completion_at'=> ['required','date','after:end_registration_at'],
        ];
    }
}
