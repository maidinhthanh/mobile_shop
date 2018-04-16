<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'full'=>'unique:vp_users,fullname,'.$this->segment(3).',id',
            'mail'=>'email|unique:vp_users,email,'.$this->segment(3).',id'
        ];
    }

     public function messages()
    {
        return [
        'full.unique'=>'Tài khoản đã tồn tại',
        'mail.email'=>'Email không đúng định dạng',
        'mail.unique'=>'Tài khoản đã tồn tại'
        ];
    }
}
