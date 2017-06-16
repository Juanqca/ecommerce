@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Modificar datos usuario</h1>
    @include('errors')
    @include('users.form',['user'=>$user, 'url'=>'users/'.$user->id,'method'=>'PATCH'])
</div>
@endsection