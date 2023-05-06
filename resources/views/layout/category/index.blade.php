@extends('layout')
@section('showData')
<table class="table" style="height:100vh">
  <thead>
    <tr>
      <th scope="col">Danh sách loại</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $categories)
    <tr>
      <th scope="row">1</th>
      <td>{{$categories->title}}</td>
      <td> 
            <form action="{{route('category.destroy',[$categories->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <input class="btn mt-2" type="submit" value="Xóa">
            </form>
            <a class="btn btn-primary mt-2"
            href="{{route('category.show',[$categories->id])}}">Sửa</a>
            <!-- <form action="{{route('category.show',[$categories->id])}}" method="POST">
                @method('PUT')
                @csrf
                <input class="btn mt-2" type="submit" value="Sửa">
            </form> -->
            
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection