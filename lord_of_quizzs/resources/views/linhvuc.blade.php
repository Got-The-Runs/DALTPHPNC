
@extends('layouts.app', ['activePage' => 'linhvuc', 'titlePage' => __('Lĩnh Vực')])
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <div class="row">
                    <div class="col-8">
                      <h4 class="card-title"> Danh Sách Lĩnh Vực</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="#" class="btn btn-fill btn-success">Thêm Lĩnh Vực</a>
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