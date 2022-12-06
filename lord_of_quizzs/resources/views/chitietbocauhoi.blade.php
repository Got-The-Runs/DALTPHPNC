
@extends('layouts.app', ['activePage' => 'chitietbocauhoi', 'titlePage' => __('Chi Tiết Bộ Câu Hỏi')])
@section('content')
    @parent
    &gt; <a href="{{route('chitietbocauhois.index');}}">Chi Tiết Bộ Câu Hỏi</a>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Danh Sách Chi Tiết Bộ Câu Hỏi</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <tr>
                <th>
                  Id Bộ Câu Hỏi
                </th>
                <th>
                  Id Câu Hỏi
                </th>
                <th>
                  Trạng Thái Chi Tiết Bộ Câu Hỏi
                </th>
              </tr>
            @foreach($lst as $p)
                <div class="chitietbocauhoi">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->bo_cau_hoi_id}}</p>
                    </td>
                    <td>
                        <p>{{$p->cau_hoi_id}}</p>
                    </td>
                    <td>
                        <p>{{$p->trang_thai}}</p>
                    </td>
                </div>
              </tr>
            </tbody>
            @endforeach   
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection