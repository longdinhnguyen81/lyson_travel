@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Quản lý tư vấn</a> </div>
    <h1>Quản lý tư vấn</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
@if(Session::has('msg'))
<div class="alert alert-success">{{ Session::get('msg')}}</div>
@endif
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title text-center"> 
            <h5>Quản lý tư vấn</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Họ và tên</th>
                  <th>Số điện thoại</th>
                  <th>Dịch vụ</th>
                  <th>Tình trạng:</th>
                  <th style="text-align:center;width:150px">Chức năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($advises as $advise)
                <tr class="even gradeA">
                  <td>{{$advise->id}}</td>
                  <td>{{$advise->name}}</td>
                  <td>{{$advise->phone}}</td>
                  <td><ul>
                    @foreach($advise->service as $service)
                      <li>{{ $service->name }}</li>
                    @endforeach
                  </ul></td>
                  <td id="result-{{ $advise->id }}"><a href="javascript:void(0)" onclick="return getActive({{$advise->id}})"><img src="/templates/admin/img/icons/{{$advise->active == 0?'deactive.png':'active.png'}}" /></a></td>
                  <td class="text-center">
                  	<a onclick="return confirm('Do you want to delete this advise?')" href="{{route('admin.advise.delete', $advise->id)}}" class="btn btn-danger">Xóa</a>
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
          url: "{{ route('ajax.admin.advise') }}",
          type: 'GET',
          cache: false,
          data: {
                id: id,
            },
          success: function(data){
            console.log('success')
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