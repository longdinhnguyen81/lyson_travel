@extends('templates.admin.master')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.news.index')}}">Quản lý tin tức</a> <a href="" class="current">Sửa tin tức</a> </div>
    <h1>Quản lý tin tức</h1>
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
            <h5>Sửa tin tức</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.news.edit', $news->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tiêu đề:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ $news->title }}" style="width: 50%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" style="width:500px" rows="5">{{ $news->description }}</textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords(SEO):</label>
	                <div class="controls">
	                  <textarea name="keywords" style="width:500px" rows="5">{{ $news->keywords }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5">{{ $news->detail }}</textarea>
	                </div>
	              </div>

		              <div class="control-group">
		             	<label class="control-label">Tags:</label>
			              <div class="controls">
			            @if(count($news->tag) == 1)
			                @foreach($tags as $tag)
			                	@foreach($news->tag as $new)
				                	@if($new->id == $tag->id)
				                  <input type="checkbox" checked="checkox" name="tag_id[]" value="{{ $tag->id }}" />
				                  {{ $tag->name }}</label>
				                  	@else
				                  	<label>
				                  <input type="checkbox" name="tag_id[]" value="{{ $tag->id }}" />
				                  {{ $tag->name }}</label>
				                  	@endif
			                  	@endforeach
			                @endforeach
			            @else
			                @foreach($tags as $tag)
				                  	<label><input type="checkbox" name="tag_id[]" value="{{ $tag->id }}" />
				                  {{ $tag->name }}</label>
			                @endforeach
			            @endif
			              </div>
	            	</div>

	              <div class="control-group">
	                <label class="control-label">Hình ảnh(600px:500px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" />
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
