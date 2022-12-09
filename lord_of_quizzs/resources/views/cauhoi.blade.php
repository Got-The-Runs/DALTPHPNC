
@extends('layouts.app', ['activePage' => 'cauhoi', 'titlePage' => __('Quản lý Câu Hỏi')])
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Danh Sách Câu Hỏi</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('cauhois.create') }}" class="btn btn-fill btn-success">Thêm Câu Hỏi</a>
                    </div>
                </div>
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
                    <p>{{$p->trang_thai==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                    </td>
                </div>
                <td class="text-right">
                          <div class="dropdown">
                             <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-ellipsis-v"></i>
                          </a>
                         <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                         <a class="dropdown-item" href="{{route('cauhois.edit',['cauhoi'=>$p->id])}}">Edit</a>
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