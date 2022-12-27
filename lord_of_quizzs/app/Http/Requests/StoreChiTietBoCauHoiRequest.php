<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChiTietBoCauHoiRequest extends FormRequest
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
            'bo_cau_hoi_id'=>['required'],
            'cau_hoi_id'=>['required']
        ];
    }
    public function messages(){
        return ['bo_cau_hoi_id.required'=>'Vui lòng chọn id bộ câu hỏi','cau_hoi_id.required'=>'Vui lòng chọn id câu hỏi'];
    }
}
