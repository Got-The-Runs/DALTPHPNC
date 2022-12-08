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
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Lĩnh Vực') }}</label>
                                <select name="linhvuc" value="{{old('linhvuc')}}" class="form-control" >
                                <option value='' class="text-danger">Lĩnh Vực</option>
                                @foreach($lst as $linhvuc)
                                    <option value="{{$linhvuc->id}}" class="text-danger" >{{$linhvuc->ten_linh_vuc}}</option>
                                @endforeach
                                </select>
                                @if($errors->has('linhvuc')) {{$errors->first('linhvuc')}} @endif
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
