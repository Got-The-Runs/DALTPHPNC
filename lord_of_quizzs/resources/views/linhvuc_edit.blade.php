@extends('layouts.app',['page' => 'Quản Lý Lĩnh Vực', 'titlePage' => __('Lĩnh Vực')])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title" class="text-white bg-dark">{{ __('Sửa Lĩnh Vực') }}</h5>
                </div>
                <form method="post" action="{{route('linhvucs.update',['linhvuc'=>$p])}}" enctype  = "multipart/form-data" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-group">
                                <label>{{ __('Tên Lĩnh Vực') }}</label>
                                @foreach($lst as $linhvuc)   
                                @if($linhvuc->id==old('linhvuc', $p->id))     
                                <input type="hidden" value="{{$linhvuc->id}}" name ="id"  class="form-control" >        
                                    <input value="{{$linhvuc->ten_linh_vuc}}" name ="ten_linh_vuc"  class="form-control" >
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
