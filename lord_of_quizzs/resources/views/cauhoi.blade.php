
@extends('layouts.app', ['activePage' => 'cauhoi', 'titlePage' => __('Quản lý Câu Hỏi')])
@section('content')
    @parent
    &gt; <a href="{{route('cauhois.index');}}"> Quản Lý Câu Hỏi</a>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Danh Sách Câu Hỏi</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <tr>
                <th>
                  Id Câu Hỏi
                </th>
                <th>
                  Tên Câu Hỏi
                </th>
                <th>
                  Câu Trả Lời 1
                </th>
                <th>
                    Câu Trả Lời 2
                </th>
                <th>
                    Câu Trả Lời 3
                </th>
                <th>
                    Câu Trả Lời 4
                </th>
                <th>
                    Đáp Án
                </th>
                <th>
                  Trạng Thái Câu Hỏi
                </th>
              </tr>
            @foreach($lst as $p)
                <div class="cauhoi">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->id}}</p>
                    </td>
                    <td>
                        <p>{{$p->cau_hoi}}</p>
                    </td>
                     <td>
                        <p>{{$p->cau_tra_loi_1}}</p>
                    </td>
                    <td>
                        <p>{{$p->cau_tra_loi_2}}</p>
                    </td>
                    <td>
                        <p>{{$p->cau_tra_loi_3}}</p>
                    </td>
                    <td>
                        <p>{{$p->cau_tra_loi_4}}</p>
                    </td>
                     <td>
                        <p>{{$p->dap_an}}</p>
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