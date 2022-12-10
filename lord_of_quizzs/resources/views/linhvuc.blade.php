
@extends('layouts.app', ['activePage' => 'linhvuc', 'titlePage' => __('Lĩnh Vực')])
@section('content')
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
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <div class="row">
                    <div class="col-8 pt-3">
                      <h4 class="card-title"> Danh Sách Lĩnh Vực</h4>
                    </div>
                    <div class="col-4 text-right mb-4">
                        <a href="{{ route('linhvucs.create') }}" class="btn btn-fill btn-success">Thêm Lĩnh Vực</a>
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
                        <p>{{$p->trang_thai==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                    </td>
                </div>
                <td class="text-right">
                          <div class="dropdown">
                             <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-ellipsis-v"></i>
                          </a>
                         <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                         <a class="dropdown-item" href="{{route('linhvucs.edit',['linhvuc'=>$p->id])}}">Sửa </a>
                         <form method="post" action="{{route('linhvucs.destroy',['linhvuc'=>$p->id])}}">
                          @csrf
                          @method('DELETE')
                          @if($p->trang_thai== 1)
                            <input type="submit" value="Xóa" onclick="return checkDelete()" class="dropdown-item">
                          @else
                            <input type="submit" value="Khôi Phục" onclick="return checkRestore()" class="dropdown-item">
                          @endif
                        </form>       
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