@extends('layout')
@section('showData')
<form autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="form-group" style="display:flex; flex-direction:column; height: 100vh;
                                 align-content: center;flex-wrap: wrap;">
        <label style="height: 50px" for="">Thêm bài viết</label>

        <label style="margin-top:20px;" for="">Tiêu đề bài viết</label>
        <input type="text" style="width: 400px" placeholder="Nhập tiêu đề" 
        class="form-control" name="title">

        <label style="margin-top:20px;" for="">Mô tả ngắn</label>
        <textarea name="short_description" id="ckeditor_shortdesc" placeholder="Mô tả ngắn" 
        style="width:400px; height:90px"class="form-control"></textarea>
        
        <label style="margin-top:20px;" for="">Nội dung</label>
        <textarea name="description" id="ckeditor_desc"placeholder="Nội dung" 
        style="width:400px; height:150px"class="form-control"></textarea>
        
        <label style="margin-top:20px;" for="">Ảnh</label>
        <input type="file" style="width: 400px" name="image" class="form-control">

        <label style="margin-top:20px;" for="">Loại bài viết</label>
        <select style="width: 400px" name="post_category_id" class="form-control">
            @foreach($category as $key => $cate)
            <option  value="{{$cate->id}}">{{$cate->title}}</option>
            @endforeach
        </select>
        
        <input type="submit" style="width: 400px" name=""themloaitintuc class="btn btn-primary mt-2" value="Thêm bài viết">
        
    </div>
</form>
@endsection