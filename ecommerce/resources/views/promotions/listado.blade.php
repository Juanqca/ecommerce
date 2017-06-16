@extends('layouts.app')
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Promociones de vendedor</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>N°</td>
                <td>Promoción</td>
                <td>Descripción</td>
                <td>Fecha de inicio</td>
                <td>Fecha de Caducidad</td>


            </tr>
            </thead>
            <tbody>
            @foreach($promotions as $promotion)
                <tr>
                    <td>{{$promotion->id}}</td>
                    <td>{{$promotion->name}}</td>
                    <td>{{$promotion->description}}</td>
                    <td>{{$promotion->fechainicial}}1/12/17</td>
                    <td>{{$promotion->fechafinal}}5/12/17</td>
                    <tr>       </tr>
                    <td></td>
                    <td></td>


                <td><a class="btn btn-info" href="{{url('/promotions/'.$promotion->id.'/edit')}}">Editar</a></td>
                    <td>
                    @include('promotions.delete',['promotions'=>$promotion])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div align="center" class="floating">

        <a href="{{url('/promotions/create')}}" class="btn btn-success">
            Agregar Promoción
        </a>
        <a href="{{url('/panelcontrol/')}}" class="btn btn-success">
            Volver Panel Control
        </a>
    </div>
    @endsection
