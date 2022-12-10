
@extends('layouts.app', ['activePage' => 'bocauhois', 'titlePage' => __('Bộ Câu Hỏi')])
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
                    <div class="col-8 mt-3">
                      <h4 class="card-title"> Danh Sách Bộ Câu Hỏi</h4>
                    </div>
                    <div class="col-4 text-right">
                      <a href="{{ route('bocauhois.create') }}" class="btn btn-fill btn-success mb-4">Thêm Bộ Câu Hỏi</a>
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
                  Lĩnh Vực
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
                        @foreach($linhvuc as $lv)   
                                @if($lv->id == $p->linh_vuc_id)     
                                <p>{{$lv->ten_linh_vuc}}</p> 
                                    @endif
                        @endforeach
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
                         <a class="dropdown-item" href="{{route('bocauhois.edit',['bocauhoi'=>$p->id])}}">Sửa</a>              
                         <form method="post" action="{{route('bocauhois.destroy',['bocauhoi'=>$p->id])}}">
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