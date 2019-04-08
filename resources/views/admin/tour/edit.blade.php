@extends('templates.admin.master')
@section('content')
<style type="text/css">
	input[type="file"] {
	  display: block;
	}
	.imageThumb {
	  max-height: 75px;
	  border: 2px solid;
	  padding: 1px;
	  cursor: pointer;
	}
	.pip {
	  display: inline-block;
	  margin: 10px 10px 0 0;
	}
	.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	}
	.remove:hover {
	  background: white;
	  color: black;
	}
</style>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{route('admin.index.index')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Trang chủ</a> <a href="{{route('admin.tour.index')}}">Quản lý tour</a> <a href="" class="current">Sửa tour</a> </div>
    <h1>Quản lý tour</h1>
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
            <h5>Sửa tour</h5>
          </div>
	          <div class="widget-content nopadding">
	            <form class="form-horizontal" method="post" action="{{route('admin.tour.edit', $tour->id)}}" name="number_validate" id="number_validate" novalidate="novalidate" enctype="multipart/form-data">
	            	{{csrf_field()}}
	              <div class="control-group">
	                <label class="control-label">Tên hiển thị:</label>
	                <div class="controls">
	                  <input type="text" name="title" id="required" value="{{ $tour->title }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Hình ảnh(1200px:700px):</label>
	                <div class="controls">
	                  <input type="file" name="picture" id="required" />
	                </div>
	              </div>
	              <div class="control-group">
	              	<img src="/upload/{{ $tour->picture }}" />
	              </div>
		          <div class="control-group">
		            <label class="control-label">Vé tàu</label>
		              <div class="controls">
		                @if($tour->ticket == 1)
		                <label>
		                  <input type="radio" value="1" name="ticket" checked />
		                  Có</label>
		                <label>
		                  <input type="radio" value="0" name="ticket" />
		                  Không</label>
		                <label>
		                @else
		                <label>
		                  <input type="radio" value="1" name="ticket" />
		                  Có</label>
		                <label>
		                  <input type="radio" value="0" name="ticket" checked />
		                  Không</label>
		                <label>
		                @endif
		              </div>
		          </div>
	            <div class="control-group">
	             	<label class="control-label">Chèn Stick:</label>
		              <div class="controls">
		                @foreach($sticks as $stick)
		                <label>
		                  <input type="checkbox" name="stick_id[]" value="{{ $stick->id }}" />
		                  {{ $stick->name }}</label>
		                @endforeach
		                <label>
		              </div>
	            </div>
	              <div class="control-group">
                      <label class="control-label">Khách sạn</label>
                      <div class="controls">
                        <select name="hotel">
                          <option value="Mường Thanh">Mường Thanh</option>
                          <option value="Lý Trí">Lý Trí</option>
                          <option value="Quỳnh Anh">Quỳnh Anh</option>
                          <option value="Phát Thịnh">Phát Thịnh</option>
                        </select>
                     </div>
                  </div>
	              <div class="control-group">
	                <label class="control-label">Thời gian(x ngày y đêm):</label>
	                <div class="controls">
	                  <input type="text" name="time" id="required" value="{{ $tour->time }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Số người:</label>
	                <div class="controls">
	                  <input type="text" name="people" id="required" value="{{ $tour->people }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Xuất phát:</label>
	                <div class="controls">
	                  <input type="text" name="from" id="required" value="{{ $tour->from }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá:</label>
	                <div class="controls">
	                  <input type="text" name="cost" id="required" value="{{ $tour->cost }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Giá khuyến mãi:</label>
	                <div class="controls">
	                  <input type="text" name="recost" id="required" value="{{ $tour->recost }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Keywords:</label>
	                <div class="controls">
	                  <input type="text" name="keywords" id="required" value="{{ $tour->keywords }}" style="width: 70%" />
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Mô tả:</label>
	                <div class="controls">
	                  <textarea name="description" rows="5" style="width: 70%" >{{ $tour->description }} </textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nội dung:</label>
	                <div class="controls">
	                  <textarea name="detail" id="editor1" rows="5">{{ $tour->detail }}</textarea>
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Kho ảnh đẹp:</label>
	                <div class="field" align="left">
					  <input type="file" id="files" name="files[]" multiple />
					  @foreach($pictures as $picture)
					  	<div class="pip" id="result-{{$picture->id}}">
					  		<img class="imageThumb" width="100px" src="/upload/{{ $picture->name }}"><br>
					  		<a onclick="return removePicture({{ $picture->id }})" class="remove">Remove image</a>
					  	</div>
					  @endforeach
					</div>
	              </div>

					<script src="/templates/admin/js/jquery.min.js"></script> 
		              <script type="text/javascript">
				        $(document).ready(function() {
						  if (window.File && window.FileList && window.FileReader) {
						    $("#files").on("change", function(e) {
						      var files = e.target.files,
						        filesLength = files.length;
						      for (var i = 0; i < filesLength; i++) {
						        var f = files[i]
						        var fileReader = new FileReader();
						        fileReader.onload = (function(e) {
						          var file = e.target;
						          $("<span class=\"pip\">" +
						            "<img class=\"imageThumb\" width='100px' src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
						            "<br/><span class=\"remove\">Remove image</span>" +
						            "</span>").insertAfter("#files");
						          $(".remove").click(function(){
						            $(this).parent(".pip").remove();
						          });
						          
						          // Old code here
						          /*$("<img></img>", {
						            class: "imageThumb",
						            src: e.target.result,
						            title: file.name + " | Click to remove"
						          }).insertAfter("#files").click(function(){$(this).remove();});*/
						          
						        });
						        fileReader.readAsDataURL(f);
						      }
						    });
						  } else {
						    alert("Your browser doesn't support to File API")
						  }
						});
				    </script>
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
<script type="text/javascript">
    function removePicture(id){
        $.ajax({
          url: "{{ route('ajax.admin.picture') }}",
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