<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLinhVucRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ten_linh_vuc'=>['required','unique:linh_vucs'],
        ];
    }
    public function messages(){
        return ['ten_linh_vuc.required'=>'Chưa nhập tên lĩnh vực','ten_linh_vuc.unique'=>'Đã tồn tại tên lĩnh vực'];
        
    }
}
