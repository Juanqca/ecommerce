@extends("layouts.app");
@section("content")
    <div class="container white">
    <h1>Editar Promoción</h1>
    @include('errors')
    @include('promotions.form',['promotions'=>$promotions, 'url'=>'promotions/'.$promotions->id, 'method'=>'PATCH'])
    </div>
@endsection