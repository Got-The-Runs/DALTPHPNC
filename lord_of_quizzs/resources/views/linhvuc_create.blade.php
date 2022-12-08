@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Thêm Lĩnh Vực') }}</h5>
                </div>
                <form method="post" action="{{ route('linhvucs.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label>{{ __('Tên Lĩnh Vực') }}</label>
                                <input type="text" name="ten_linh_vuc" value="{{old('ten_linh_vuc')}}" class="form-control">
                            </div>    
                            <br>@if($errors->has('ten_linh_vuc')) {{$errors->first('ten_linh_vuc')}} <br>@endif     
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-success">{{ __('Thêm')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
