
@extends('layouts.app', ['activePage' => 'linhvuc', 'titlePage' => __('Lĩnh Vực')])
@section('content')
    @parent
    &gt; <a href="{{route('linhvucs.index');}}">Lĩnh Vực</a>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> Danh Sách Lĩnh Vực</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <tr>
                <th>
                  Id Lĩnh Vực
                </th>
                <th>
                  Tên Lĩnh Vực
                </th>
                <th>
                  Trạng Thái Lĩnh Vực
                </th>
              </tr>
            @foreach($lst as $p)
                <div class="linhvuc">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->id}}</p>
                    </td>
                    <td>
                        <p>{{$p->ten_linh_vuc}}</p>
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