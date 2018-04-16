<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'full'=>'unique:vp_users,fullname',
            'mail'=>'email|unique:vp_users,email',
            'pass'=>'min:4|max:9'
            
        ];
    }

    public function messages()
    {
        return [
        'full.unique'=>'Tài khoản đã tồn tại',
        'mail.email'=>'Email không đúng định dạng',
        'mail.unique'=>'Tài khoản đã tồn tại',
        'pass.min'=>'Mật khẩu không nhỏ hơn 4 kí tự',
        'pass.max'=>'Mật khẩu không lớn hơn  kí tự'
        ];
    }
}
