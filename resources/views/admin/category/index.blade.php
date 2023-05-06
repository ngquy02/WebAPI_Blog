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
                    <div class="pd-20 card-box mb-30">
						<div class="clearfix mb-20">
							<div class="pull-left">
								<h4 class="text-blue h4">Danh mục loại tin tức</h4>
								
							</div>
							<div class="pull-right">
								<a
									href="{{route('category.create')}}"
									class="btn btn-primary "								
									role="button"
								>
									Thêm
								</a>
							</div>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Tiêu đề</th>
									<th scope="col">Quản lí</th>
									
								</tr>
							</thead>
							<tbody>
                            @foreach($category as $index => $categories)
								<tr>
									<th scope="row">{{$index + 1}}</th>
									<td>{{$categories->title}}</td>								
									<td>
                                        <form action="{{route('category.destroy',[$categories->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger mt-2" type="submit" value="Xóa">
                                            <a class="btn btn-primary mt-2"
            									href="{{route('category.show',[$categories->id])}}">Sửa</a>
                                        </form>
                                    </td>
								</tr>	
                            @endforeach							
							</tbody>
						</table>
							
					</div>                       

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