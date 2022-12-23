
@extends('layouts.app', ['activePage' => 'cauhoi', 'titlePage' => __('Quản lý Câu Hỏi')])
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
<header>
  <script language="JavaScript" type="text/javascript">
    function checkCantDelete(){  
        return confirm('Không thể xóa câu hỏi này vì đang được sử dụng!!');
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
                        <!-- <p>{{$p->dap_an}}</p> -->
                        @if($p->dap_an == 1)
                        <p>{{$p->cau_tra_loi_1}}</p>

                        @elseif($p->dap_an == 2)
                        <p>{{$p->cau_tra_loi_2}}</p>

                        @elseif($p->dap_an == 3)
                        <p>{{$p->cau_tra_loi_3}}</p>
                        
                        @else
                        <p>{{$p->cau_tra_loi_3}}</p>
                        @endif
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
                         <a class="dropdown-item" href="{{route('cauhois.edit',['cauhoi'=>$p->id])}}">Sửa</a>
                         
                         <form method="post" action="{{route('cauhois.destroy',['cauhoi'=>$p->id])}}">
                          
                          @csrf
                          @method('DELETE')
                          @foreach($lstCTBCH as $c)
                            @if($p->trang_thai == 1 && $c->cau_hoi_id == $p->id)
                            @php
                            $xoa = 0
                            @endphp
                            @break
                            @elseif($p->trang_thai == 1 && $c->cau_hoi_id != $p->id)
                            @php
                            $xoa = 1
                            @endphp
                            @elseif($p->trang_thai == 0)
                            @php
                            $xoa = 2
                            @endphp
                            @endif    
                          @endforeach    
                          @if($xoa == 0)
                             <input value="Xóa" onclick="return checkCantDelete()" class="dropdown-item" readonly>
                             @elseif($xoa == 1)
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