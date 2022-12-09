
@extends('layouts.app', ['activePage' => 'chitietbocauhoi', 'titlePage' => __('Chi Tiết Bộ Câu Hỏi')])
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
      <div class="row">
                    <div class="col-8 pt-3">
                      <h4 class="card-title"> Danh Sách Chi Tiết Bộ Câu Hỏi</h4>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('chitietbocauhois.create') }}" class="btn btn-fill btn-success mb-4">Thêm Chi Tiết Bộ Câu Hỏi</a>
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
                  Id Câu Hỏi
                </th>
                <th>
                  Trạng Thái Chi Tiết Bộ Câu Hỏi
                </th>
              </tr>
            @foreach($lst as $p)
                <div class="chitietbocauhoi">                
                    </thead>
                    <tbody>
                    <tr>
                    <td>
                        <p>{{$p->bo_cau_hoi_id}}</p>
                    </td>
                    <td>
                        @foreach($lstcauhoi as $cauhoi)   
                                @if($cauhoi->id == $p->cau_hoi_id)     
                                <p>{{$cauhoi->cau_hoi}}</p> 
                                    @endif
                                @endforeach
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
                         <a class="dropdown-item" href="{{route('chitietbocauhois.edit',['chitietbocauhoi'=>$p->id])}}">Edit</a>
                         <form method="post" action="{{route('chitietbocauhois.destroy',['chitietbocauhoi'=>$p->id])}}">
                          @csrf
                          @method('DELETE')
                            <input type="submit" value="Xóa" class="dropdown-item">
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