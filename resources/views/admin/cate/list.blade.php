@extends('layouts.app')


@section('title')

<title>Quản trị danh mục phim </title>

@endsection


@section('content')


<div class="container">

<h2 style="text-align: center">Chào mừng bạn đến với trang quản lí danh mục</h2>

<table class="table table-striped table-dark" style="background-color: white; color: black">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên Danh Mục</th>
        <th scope="col">Mô Tả</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($allCate as $cate )
    <tr>
        <th scope="row">{{$cate->id}}</th>
        <td>{{$cate->c_name}}</td>
        <td>{{$cate->c_description}}</td>
        <td>@mdo</td>
      </tr>  
    @endforeach
      
      
    </tbody>
  </table>
</div>

@endsection