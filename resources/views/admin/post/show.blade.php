@extends('admin.layout.master')
@section('content')
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>blank</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											blank
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <form autocomplete="off" method="POST" enctype="multipart/form-data"
                        action="{{route('post.update',[$post->id])}}">
					@method('PUT')
                            @csrf
	<div class="form-group">
		<label>Tiêu đề</label>
		<input class="form-control" type="text" value="{{$post->title}}"
        placeholder="Tiêu đề bài viết" name="title">
	</div>
	<div class="form-group">
		<label>Mô tả ngắn</label>
		<textarea class="form-control sm" 
        name="short_description" placeholder="Mô tả ngắn">{{$post->short_description}}</textarea>
	</div>
    <div class="form-group">
		<label>Nội dung bài viết</label>
		<textarea class="form-control" 
        name="description" placeholder="Nội dung">{{$post->description}}</textarea>
	</div>
	
	<div class="form-group">
		<label>Ảnh</label>
		<input type="file" value="{{$post->image}}" 
        name="image" class="form-control-file form-control height-auto">
        <img src="{{asset('uploads/'.$post->image)}}" alt="" srcset="">
    
	</div>
	<div class="form-group">
		<label>Loại tin tức</label>
		<div>
			<select class="custom-select" name="post_category_id">
					<option selected="">Chọn thể loại</option>
				@foreach($category as $key => $cate)
            		<option 
                    {{$cate->id == $post->post_category_id ? 'selected' :''}} 
                    value="{{$cate->id}}">{{$cate->title}}</option>
            	@endforeach
			</select>
		</div>
	</div>
	<input type="submit"  name="chinhsuabaiviet" class="btn btn-primary mt-2" value="Sửa bài viết">
</form>
                    </div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>

@endsection