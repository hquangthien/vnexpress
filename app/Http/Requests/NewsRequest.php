<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title' => 'required',
            'preview' => 'required|max:190',
            'detail' => 'required',
            'cat_parrent' => 'required',
            'picture' => 'required|file'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Nhập tiêu đề tin',
            'preview.required' => 'Nhập mô tả tin',
            'preview.max' => 'Mô tả quá dài',
            'detail.required' => 'Nhập chi tiết tin',
            'cat_parrent.required' => 'Chọn danh mục tin cha',
            'picture.required' => 'Chọn ảnh bìa cho tin',
            'picture.file' => 'Chọn ảnh bìa cho tin'
        ];
    }
}
