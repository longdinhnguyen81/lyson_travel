@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.travel.index')}}">Quản lý dịch vụ</a> <a href="" class="current">Sửa dịch vụ</a> </div>
    <h1>Quản lý dịch vụ</h1>
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
            <h5>Sửa dịch vụ</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.travel.edit', $travel->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tiêu đề:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ $travel->title }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords:</label>
	                <div class="controls">
	                  <input type="text" name="keywords" id="required" value="{{ $travel->keywords }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" style="width: 70%;height: 80px" >{{ $travel->description }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Điểm đi:</label>
	                <div class="controls">
	                  <input type="text" name="travel_from" id="required" value="{{ $travel->travel_from }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Điểm đến:</label>
	                <div class="controls">
	                  <input type="text" name="travel_to" id="required" value="{{ $travel->travel_to }}" style="width: 70%" />
	                </div>
	              </div>{{-- 
	              <div class="control-group">
	                <label class="control-label">Thời gian(ex:1h30p):</label>
	                <div class="controls">
	                  <input type="text" name="time" id="required" value="{{ $travel->time }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Khoảng cách(km):</label>
	                <div class="controls">
	                  <input type="number" name="distance" id="required" value="{{ $travel->distance }}" style="width: 70%" />
	                </div>
	              </div> --}}
	              @php
	              	$one = 0;
	              	$four = 0;
	              	$seven = 0;
	              	$sixteen = 0;
	              	$thirty = 0;
	              	$fourtyfive = 0;
	              @endphp
	              @foreach($travel->car as $car)
	              	@if($car->seat == 1)
	              		@php $one = $car->cost @endphp
	              	@elseif($car->seat == 4)
	              		@php $four = $car->cost @endphp
	              	@elseif($car->seat == 7)
	              		@php $seven = $car->cost @endphp
	              	@elseif($car->seat == 16)
	              		@php $sixteen = $car->cost @endphp
	              	@elseif($car->seat == 30)
	              		@php $thirty = $car->cost @endphp
	              	@else
	              		@php $fourtyfive = $car->cost @endphp
	              	@endif


	              @endforeach
	              <div class="control-group">
	                <label class="control-label">Giá đi ké xe 1 chỗ(không bắt buộc nhập):</label>
	                <div class="controls">
	                  <input type="number" name="oneseat" id="required" value="{{ $one?$one:'' }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 4 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="fourseat" id="required" value="{{ $four?$four:'' }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 7 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="sevenseat" id="required" value="{{ $seven?$seven:'' }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 16 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="sixteenseat" id="required" value="{{ $sixteen?$sixteen:'' }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 30 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="thirtyseat" id="required" value="{{ $thirty?$thirty:'' }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 45 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="fourtyfiveseat" id="required" value="{{ $fourtyfive?$fourtyfive:'' }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5">{{ $travel->detail }}</textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh(1200px:700px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" />
	                </div>
	              </div>
	              <div class="control-group">
	                <div class="controls">
	              		<img src="/upload/{{ $travel->picture }}" width="50%" />
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