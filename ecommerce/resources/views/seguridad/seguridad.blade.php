@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Seguridad</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <h1>Datos</h1>
            @foreach($users as $user)

                <tr><td>Name</td><td>{{$user->name}}</td></tr>

                <tr><td>Password</td><td>********</td></tr>
            </thead>
            <a href="{{url('/users/'.$user->id).'/edit'}}" class="btn btn-success">
                Modificar contraseña
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