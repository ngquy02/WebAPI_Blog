@extends('layout')
@section('showData')
<form autocomplete="off" method="POST" action="{{route('category.store')}}">
    @csrf
    <div class="form-group" style="display:flex; flex-direction:column; height: 100vh;
                                 align-content: center;flex-wrap: wrap;">
        <label style="height: 50px" for="">Tiêu đề</label>
        <input type="text" style="width: 400px" placeholder="Nhập tiêu đề" class="form-control" name="title">    
        <input type="submit" style="width: 400px" name="themloaitintuc" class="btn btn-primary mt-2" value="Thêm">
        <a href="{{route('category.index')}}" class="btn nikki-btn mt-2">Xem  các loại tin tức</a>
    </div>
</form>
@endsection