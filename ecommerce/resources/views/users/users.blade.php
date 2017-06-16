@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Usuario Vendedor Datos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <h1>Datos</h1>
            @foreach($users as $user)
            <tr><td>ID</td><td>{{$user->id}}</td></tr>
            <tr><td>Name</td><td>{{$user->name}}</td></tr>
            <tr><td>Email</td><td>{{$user->email}}</td></tr>
            <tr><td>Password</td><td><a href="{{url('/seguridad/')}}" class="btn btn-info btn-sm">
                        Modificar Contraseña
                    </a></td></tr>
            </thead>
            <a href="{{url('/users/'.$user->id).'/edit'}}" class="btn btn-success">
                Modificar Datos
            </a>
            @endforeach
        </table>
    </div>
    <div align="center" class="floating">
        <a href="{{url('/panelcontrol/')}}" class="btn btn-success">
            Volver Panel Control
        </a>


    </div>
@endsection