@extends('layouts.app')
<header>
  <script language="JavaScript" type="text/javascript">
    function checkCreate(){      
        return confirm('Thêm thành công');
    }
  </script>
</header>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Thêm Câu Hỏi') }}</h5>
                </div>
                <form method="post" action="{{ route('cauhois.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label>{{ __('Câu Hỏi') }}</label>
                                <input type="" name="cau_hoi" class="form-control">
                            </div>
                            @if($errors->has('cau_hoi')) {{$errors->first('cau_hoi')}} @endif

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 1') }}</label>
                                <input type="" name="cau_tra_loi_1" class="form-control">
                            </div>
                            @if($errors->has('cau_tra_loi_1')) {{$errors->first('cau_tra_loi_1')}} @endif

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 2') }}</label>
                                <input type="" name="cau_tra_loi_2" class="form-control">
                            </div>
                            @if($errors->has('cau_tra_loi_2')) {{$errors->first('cau_tra_loi_2')}} @endif

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 3') }}</label>
                                <input type="" name="cau_tra_loi_3" class="form-control">
                            </div>
                            @if($errors->has('cau_tra_loi_3')) {{$errors->first('cau_tra_loi_3')}} @endif

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 4') }}</label>
                                <input type="" name="cau_tra_loi_4" class="form-control">
                            </div>
                            @if($errors->has('cau_tra_loi_4')) {{$errors->first('cau_tra_loi_4')}} @endif

                            <div class="form-group">
                                <label>{{ __('Chọn Đáp Án') }}</label>
                                <select name="dap_an" value="{{old('dap_an')}}" class="form-control" >
                                <option value='' class="text-danger">Chọn đáp án</option> 
                                <option value='1' class="text-danger">Đáp án 1</option>
                                <option value='2' class="text-danger">Đáp án 2</option>
                                <option value='3' class="text-danger">Đáp án 3</option>
                                <option value='4' class="text-danger">Đáp án 4</option>
                                </select>
                            </div>
                            @if($errors->has('dap_an')) {{$errors->first('dap_an')}} @endif
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-success">{{ __('Thêm')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
