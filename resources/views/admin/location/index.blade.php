@extends('templates.admin.master')
@section('content')
	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="#" class="current">Quản lý IP</a> </div>
    <h1>Quản lý IP</h1>
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
                @foreach($ips as $ip)
                <tr class="even gradeA">
                  <td>{{$ip->id}}</td>
                  <td><ul>
                    @foreach($ip->location as $service)
                      <li>{{ $service->name }}</li>
                    @endforeach
                  </ul></td>
                  
                  <td class="text-center">
                  	<a onclick="return confirm('Do you want to delete this ip?')" href="{{route('admin.ip.delete', $ip->id)}}" class="btn btn-danger">Xóa</a>
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
@stop