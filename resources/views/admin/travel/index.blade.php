@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Quản lý chuyến xe</a> </div>
    <h1>Quản lý chuyến xe</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        	<a href="{{route('admin.travel.add')}}" class="btn btn-success">Thêm</a>
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý dịch vụ</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tiêu đề</th>
                  <th>Mô tả</th>
                  <th>Danh mục dịch vụ</th>
                  <th>Hình ảnh</th>
                  <th>Trạng thái</th>
                  <th style="text-align:center;width:150px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($travels as $travel)
                <tr class="even gradeA">
                  <td>{{$travel->id}}</td>
                  <td>{{$travel->title}}</td>
                  <td>{{$travel->description}}</td>
                  <td>
                    <ul>
                      <li>
                        <table style="width: 100%; border: hidden">
                      @foreach($travel->car as $car)
                          <tr>
                            <th><strong>Chỗ ngồi</strong>:{{ $car->seat }} - <strong>Giá</strong>: {{ number_format($car->cost) }} VND</th>
                            <th><a href="{{ route('admin.car.edit', $car->id) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('admin.car.delete', $car->id) }}" class="btn btn-danger">Xóa</a></th>
                          </tr>
                          <tr>
                          </tr>
                      @endforeach
                        </table>
                      </li>
                    </ul>
                  </td>
                  <td><img style="width:300px" src="/upload/{{$travel->picture}}" /></td>
                  <td id="result-{{ $travel->id }}"><a href="javascript:void(0)" onclick="return getActive({{$travel->id}})"><img src="/templates/admin/img/icons/{{$travel->active == 0?'deactive.png':'active.png'}}" /></a></td>
                  <td class="text-center">
                  	<a href="{{route('admin.travel.edit', $travel->id)}}" class="btn btn-primary">Sửa</a>
                  	<a onclick="return confirm('Do you want to delete this travel?')" href="{{route('admin.travel.delete', $travel->id)}}" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
</div>
</div>
<script type="text/javascript">
    function getActive(id){
        $.ajax({
          url: "{{ route('ajax.admin.travel') }}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){

            $('#result-'+id).html(data);
          }, 
          error: function() {
           alert("Có lỗi");
         }
       }); 
        return false;
      }
</script>
@stop
