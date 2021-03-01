<?php

namespace App\Http\Requests;

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
            'name'=>'required | min:3| max:20',
            'email'=>'required |email|',
            'subject'=>'required | min:10| max:100',
            'message'=>'required | min:10| max:500',
        ];
    }

    /**
     * Change errors text, if you want
     *
     *  public function attributes()
        {
            return [
                'name'=>'YOUR NAME',
            ];
        }
     *
     *
     */


    /**
      * Change errors text, if you want
      *
      * public function messages()
            {
                return [
                  'name required'=>'IT\'S REQUIRED',
                  ];
           }
      *
      *
      */



}
