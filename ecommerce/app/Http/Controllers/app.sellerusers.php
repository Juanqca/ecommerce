@extends('layouts.app');
@section('content')
<div class="big-padding text-center blue-grey white-text">
    <h1>Datos Vendedor</h1>
</div>
<table width="200" border="1">
    <tbody>
    <tr>
        <td>User picture</td>
        <td>Slogan </td>
    </tr>
    <tr>
        <td>Ranked </td>
        <td>Category </td>
    </tr>
    </tbody>
</table>
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>Codigo Usuario</td>
            <td>Nombre</td>
            <td>Apelllido</td>
            <td>Correo</td>
            <td>Direccion </td>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$userseller->codeuser}}</td>
            <td>{{$userseller->fname}}</td>
            <td>{{$userseller->lname}}</td>
            <td>{{$userseller->email}}</td>
            <td>{{$userseller->adress}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
