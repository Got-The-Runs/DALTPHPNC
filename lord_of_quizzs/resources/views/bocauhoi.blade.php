
@extends('layouts.app', ['activePage' => 'bocauhoi', 'titlePage' => __('Bộ Câu Hỏi')])
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">

        <div class="row">
                    <div class="col-8">
                      <h4 class="card-title"> Danh Sách Bộ Câu Hỏi</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#" class="btn btn-sm btn-primary">Thêm Bộ Câu Hỏi</a>
                    </div>
                </div>
      </div>
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
                <td class="text-right">
                          <div class="dropdown">
                             <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-ellipsis-v"></i>
                          </a>
                         <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                         <a class="dropdown-item" href="#">Edit</a>
                         <a class="dropdown-item" href="#">Delete</a>
                      </div>
                    </div>
                 </td>
              </tr>
            </tbody>
            @endforeach   
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection