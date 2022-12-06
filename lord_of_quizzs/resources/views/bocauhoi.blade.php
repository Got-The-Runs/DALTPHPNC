
@extends('layouts.app', ['activePage' => 'bocauhoi', 'titlePage' => __('Bộ Câu Hỏi')])
@section('content')
    @parent
    &gt; <a href="{{route('bocauhois.index');}}">Bộ Câu Hỏi</a>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Danh Sách Bộ Câu Hỏi</h4>
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
                  Id Lĩnh Vực
                </th>
                <th>
                  Trạng Thái Bộ Câu Hỏi
                </th>
              </tr>
            @foreach($lst as $p)
                <div class="bocauhoi">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->id}}</p>
                    </td>
                    <td>
                        <p>{{$p->linh_vuc_id}}</p>
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