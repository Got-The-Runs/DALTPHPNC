@extends('layouts.app', [ 'titlePage' => __('Chi Tiết Bộ Câu Hỏi')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Sửa Chi Tiết Bộ Câu Hỏi') }}</h5>
                </div>
                <form method="post" action="{{route('chitietbocauhois.update',['chitietbocauhoi'=>$p->id])}}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Mã Bộ Câu Hỏi') }}</label>
                                <select name="bocauhoi" value="{{old('bocauhoi')}}" class="form-control" >
                                @foreach($lstBoCauHoi as $bocauhoi)                
                                    <option value="{{$bocauhoi->id}}" @if($bocauhoi->id==old('bocauhoi', $p->bo_cau_hoi_id)) selected @endif class="text-danger" >{{$bocauhoi->id}}</option>
                                @endforeach
                                </select>   
                            </div>
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Câu Hỏi') }}</label>
                                <select name="cauhoi" value="{{old('cauhoi')}}" class="form-control" >
                                @foreach($lstCauHoi as $cauhoi)                
                                    <option value="{{$cauhoi->id}}" @if($cauhoi->id==old('cauhoi', $p->cau_hoi_id)) selected @endif class="text-danger" >{{$cauhoi->cau_hoi}}</option>
                                @endforeach
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
