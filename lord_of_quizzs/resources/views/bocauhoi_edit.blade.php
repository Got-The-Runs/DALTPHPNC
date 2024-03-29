@extends('layouts.app', ['page' => 'Quản Lý Bộ Câu Hỏi', 'titlePage' => __('Bộ Câu Hỏi')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Sửa Bộ Câu Hỏi') }}</h5>
                </div>
                <form method="post" action="{{route('bocauhois.update',['bocauhoi'=>$p])}}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="text-white bg-dark">{{ __('Chọn Lĩnh Vực') }}</label>
                                <select name="linhvuc" value="{{old('linhvuc')}}" class="form-control" >
                                @foreach($lst as $linhvuc)                
                                    <option value="{{$linhvuc->id}}" @if($linhvuc->id==old('linhvuc', $p->linh_vuc_id)) selected @endif class="text-danger" >{{$linhvuc->ten_linh_vuc}}</option>
                                @endforeach
                                </select>
                               @if($errors->has('linhvuc')) {{$errors->first('linhvuc')}} @endif
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
