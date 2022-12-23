
@extends('layouts.app', ['page' => 'Danh Sách Tài Khoản', 'pageSlug' => __('Danh Sách Tài Khoản')])
<header>
  <script language="JavaScript" type="text/javascript">
    function checkDelete(){      
        return confirm('Bạn có chắc chắn muốn xóa');
    }
  </script>
</header>
<header>
  <script language="JavaScript" type="text/javascript">
    function checkRestore(){      
        return confirm('Bạn có chắc chắn muốn khôi phục');
    }
  </script>
</header>
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Tài Khoản</h4>
                    </div>
                    <!-- <div class="col-4 text-right">
                        <a href="#" class="btn btn-sm btn-primary">Thêm tài khoản</a>
                    </div> -->
                </div>  
            </div>
            <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <tr>
                <th>
                  Tên 
                </th>
                <th>
                  Email
                </th>
                <!-- <th>
                  Trạng Thái 
                </th> -->
              </tr>
            @foreach($lst as $p)
                <div class="user">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->name}}</p>
                    </td>
                    <td>
                        <p>{{$p->email}}</p>
                    </td>
                    <!-- <td>
                            <p>{{$p->trang_thai==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                       
                    </td> -->
                </div>
                <!-- <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                         <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="#">Edit</a> -->
                                   <!-- </div>
                               </div>
                            </td> --> 
              </tr>
            </tbody>
            @endforeach   
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection