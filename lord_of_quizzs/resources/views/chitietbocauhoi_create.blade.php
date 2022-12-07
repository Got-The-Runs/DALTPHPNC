@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Thêm Chi Tiết Bộ Câu Hỏi') }}</h5>
                </div>
                <form method="post" action="{{ route('chitietbocauhois.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Bộ Câu Hỏi') }}</label>
                                <select name="bo_cau_hoi_id" value="{{old('bo_cau_hoi_id')}}" class="form-control" >
                                <option value='' class="text-danger">ID Bộ Câu Hỏi</option>
                                @foreach($lsBoCauHoi as $bocauhoi)
                                    <option value="{{$bocauhoi->id}}" class="text-danger" >{{$bocauhoi->id}}</option>
                                @endforeach
                                </select>
                                <br>@if($errors->has('bo_cau_hoi_id')) {{$errors->first('bo_cau_hoi_id')}} <br>@endif
                            </div>
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Câu Hỏi') }}</label>
                                <select name="cau_hoi_id" value="{{old('bo_cau_hoi_id')}}" class="form-control" >
                                <option value='' class="text-danger">Câu Hỏi</option>
                                @foreach($lsCauHoi as $cauhoi)
                                    <option value="{{$cauhoi->id}}" class="text-danger" >{{$cauhoi->id}}</option>
                                @endforeach
                                </select>
                                <br>@if($errors->has('cau_hoi_id')) {{$errors->first('cau_hoi_id')}} <br>@endif
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-success">{{ __('Thêm')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
