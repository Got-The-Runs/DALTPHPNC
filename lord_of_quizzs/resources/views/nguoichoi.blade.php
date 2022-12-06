
@extends('layouts.app', ['activePage' => 'nguoichoi', 'titlePage' => __('Lịch Sử Người Chơi')])
@section('content')
    @parent
    &gt; <a href="{{route('nguoichois.index');}}">Lịch Sử Người Chơi</a>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Danh Sách Lịch Sử Người Chơi</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <tr>
                <th>
                  Id Người Chơi
                </th>
                <th>
                  Tên Người Chơi
                </th>
                <th>
                  Ngày Chơi
                </th>
                <th>
                  Tổng Điểm
                </th>
              </tr>
            @foreach($lst as $p)
                <div class="nguoichoi">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->user_id}}</p>
                    </td>
                    <td>
                        <p>{{$p->name}}</p>
                    </td>
                    <td>
                        <p>{{$p->ngay_choi}}</p>
                    </td>
                    <td>
                        <p>{{$p->tong_diem}}</p>
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