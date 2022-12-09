<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCauHoiRequest extends FormRequest
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
            'cau_hoi'=>['required','unique:cau_hois'],
            'cau_tra_loi_1'=>['required'],
            'cau_tra_loi_2'=>['required'],
            'cau_tra_loi_3'=>['required'],
            'cau_tra_loi_4'=>['required'],
            'dap_an'=>['required']
        ];
    }
    public function messages(){
        return [
            'cau_hoi.required'=>'Chưa nhập câu hỏi',
            'cau_hoi.unique' =>'Câu hỏi đã tồn tại',
            'cau_tra_loi_1.required'=>'Chưa nhập câu trả lời 1',
            'cau_tra_loi_2.required'=>'Chưa nhập câu trả lời 2',
            'cau_tra_loi_3.required'=>'Chưa nhập câu trả lời 3',
            'cau_tra_loi_4.required'=>'Chưa nhập câu trả lời 4',
            'dap_an.required'=>'Chưa chọn đáp án'
        ];
    }
}
