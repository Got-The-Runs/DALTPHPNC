@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Thêm Bộ Câu Hỏi') }}</h5>
                </div>
                <form method="post" action="{{ route('bocauhois.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @include('alerts.success')
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Id Bộ Câu hỏi') }}</label>
                                <input type="text" name="id_bo_cau_hoi" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Lĩnh Vực') }}</label>
                                <select name="linhvuc" class="form-control" >
                                <option value='' class="text-danger">--Chọn Lĩnh Vực--</option>
                                @foreach($lst as $linhvuc)
                                    <option value="{{$linhvuc->id}}" class="text-danger" >{{$linhvuc->ten_linh_vuc}}</option>
                                @endforeach
                                </select>
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
