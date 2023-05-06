@extends('layout')
@section('showData')
<form autocomplete="off" method="POST" action="{{route('category.update',[$category->id])}}">
    @method('PUT')
    @csrf
    <div class="form-group" style="display:flex; flex-direction:column; height: 100vh;
                                 align-content: center;flex-wrap: wrap;">
        <label style="height: 50px" for="">Sửa lọai tin tức</label>
        <input type="text" value="{{$category->title}}" style="width: 400px" placeholder="Nhập tiêu đề cần sửa" class="form-control" name="title">    
        <input type="submit" style="width: 400px" name="themloaitintuc" class="btn btn-primary mt-2" value="Sửa">
    </div>
</form>
@endsection