@extends('layouts.app', [ 'titlePage' => __('Câu Hỏi')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Sửa Câu Hỏi') }}</h5>
                </div>
                <form method="post" action="{{route('cauhois.update',['cauhoi'=>$p])}}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-group">
                                @foreach($lst as $cauhoi)   
                                @if($cauhoi->id==old('cauhoi', $p->id))     
                                <input type="hidden" value="{{$cauhoi->id}}" name ="id"  class="form-control" >
                                    <div class="form-group">
                                        <label>{{ __('Câu Hỏi') }}</label>        
                                        <input value="{{$cauhoi->cau_hoi}}" name ="cau_hoi"  class="form-control" >
                                    </div>
                                    @if($errors->has('cau_hoi')) {{$errors->first('cau_hoi')}} @endif

                                    <div class="form-group">
                                        <label>{{ __('Câu Trả lời 1') }}</label>
                                        <input value="{{$cauhoi->cau_tra_loi_1}}" name ="cau_tra_loi_1"  class="form-control" >
                                    </div>
                                    @if($errors->has('cau_tra_loi_1')) {{$errors->first('cau_tra_loi_1')}} @endif
                                    
                                    <div class="form-group">
                                        <label>{{ __('Câu Trả lời 2') }}</label>
                                        <input value="{{$cauhoi->cau_tra_loi_2}}" name ="cau_tra_loi_2"  class="form-control" >
                                    </div>
                                    @if($errors->has('cau_tra_loi_2')) {{$errors->first('cau_tra_loi_2')}} @endif
    
                                    <div class="form-group">
                                        <label>{{ __('Câu Trả lời 3') }}</label>
                                        <input value="{{$cauhoi->cau_tra_loi_3}}" name ="cau_tra_loi_3"  class="form-control" >
                                    </div>
                                    @if($errors->has('cau_tra_loi_3')) {{$errors->first('cau_tra_loi_3')}} @endif
                                    
                                    <div class="form-group">
                                        <label>{{ __('Câu Trả lời 4') }}</label>
                                        <input value="{{$cauhoi->cau_tra_loi_4}}" name ="cau_tra_loi_4"  class="form-control" >
                                    </div>
                                    @if($errors->has('cau_tra_loi_4')) {{$errors->first('cau_tra_loi_4')}} @endif
                                    
                                    <div class="form-group">
                                        <label>{{ __('Chọn Đáp Án') }}</label>
                                        <select name="dap_an" value="{{old('dap_an')}}" class="form-control" >
                                        <option value='1'@if($cauhoi->dap_an==1) selected @endif  class="text-danger">Đáp án 1</option>
                                        <option value='2' @if($cauhoi->dap_an==2)  selected @endif class="text-danger">Đáp án 2</option>
                                        <option value='3' @if($cauhoi->dap_an==3)  selected @endif class="text-danger">Đáp án 3</option>
                                        <option value='4' @if($cauhoi->dap_an==4)  selected @endif class="text-danger">Đáp án 4</option>
                                    </select>
                                    </div>

                                    @endif
                                @endforeach
                            </div>    
                                </select>                   
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-success">{{ __('Lưu')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
