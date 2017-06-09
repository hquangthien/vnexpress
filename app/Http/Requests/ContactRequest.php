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
            'name' => 'required',
            'mail' => 'required|email:true',
            'subject' => 'required',
            'detail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập họ tên',
            'mail.required' => 'Vui lòng nhập email',
            'mail.email' => 'Vui lòng nhập đúng định dạng email',
            'subject.required' => 'Vui lòng nhập chủ đề',
            'detail.required' => 'Vui lòng nhập nội dung',
        ];
    }
}
