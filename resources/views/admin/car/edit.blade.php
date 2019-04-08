@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.travel.index')}}">Quản lý chuyến xe</a> <a href="" class="current">Sửa giá xe</a> </div>
    <h1>Quản lý chuyến xe</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span18">
      	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Sửa giá xe</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.car.edit', $car->id)}}" name="number_validate" id="number_validate" novalidate="novalidate">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Số chỗ ngồi</label>
	                <div class="controls">
	                  <input type="number" name="seat" id="required" value="{{$car->seat}}" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá</label>
	                <div class="controls">
	                  <input type="number" name="cost" id="required" value="{{$car->cost}}" />
	                </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="Sửa" class="btn btn-success">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
        </div>
      </div>
    </div>
</div>
</div>
@stop