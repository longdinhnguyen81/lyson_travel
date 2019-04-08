@extends('templates.admin.master')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.travel.index')}}">Quản lý dịch vụ</a> <a href="" class="current">Thêm dịch vụ</a> </div>
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
            <h5>Thêm dịch vụ</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.travel.add')}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tiêu đề:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ old('title') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords:</label>
	                <div class="controls">
	                  <input type="text" name="keywords" id="required" value="{{ old('keywords') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" style="width: 70%;height: 80px" >{{ old('description') }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Điểm đi:</label>
	                <div class="controls">
	                  <input type="text" name="travel_from" id="required" value="{{ old('travel_from') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Điểm đến:</label>
	                <div class="controls">
	                  <input type="text" name="travel_to" id="required" value="{{ old('travel_to') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá đi ké xe 1 chỗ(không bắt buộc nhập):</label>
	                <div class="controls">
	                  <input type="number" name="oneseat" id="required" value="{{ old('oneseat') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 4 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="fourseat" id="required" value="{{ old('fourseat') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 7 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="sevenseat" id="required" value="{{ old('sevenseat') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 16 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="sixteenseat" id="required" value="{{ old('sixteenseat') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 30 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="thirtyseat" id="required" value="{{ old('thirtyseat') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá thuê xe 45 chỗ:</label>
	                <div class="controls">
	                  <input type="number" name="fourtyfiveseat" id="required" value="{{ old('fourtyfiveseat') }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5"></textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh(1200px:700px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" />
	                </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="Thêm" class="btn btn-success">
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