@extends('layouts.app')
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Panel de control usuarios Vendedor</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
           <tr><td><a href="{{url('users')}}" class="btn btn-success">Datos Personales<i class="material-icons" ></i></a> Ver y administrar los datos personales del vendedor y establecer o editar el acceso</td></tr>

            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-success">Datos Financieros<i class="material-icons" ></i></a> Ver y administrar los datos financieros del vendedor </td></tr>
            <tr><td><a href="{{url('providers')}}" class="btn btn-success">Proveedores<i class="material-icons" ></i></a> Establece un status del vendedor para mayor confiabilidad</td></tr>
            <tr><td><a href="{{url('promotions')}}" class="btn btn-success">Promociones<i class="material-icons" ></i></a> Ver y administrar las promociones de clientes u otros vendedores</td></tr>
            <tr><td><a href="{{url('products')}}" class="btn btn-success">Productos<i class="material-icons" ></i></a> Ver y administrar los productos y servicios ofrecidos por el vendedor</td></tr>
            <tr><td><a href="{{url('seguridad')}}" class="btn btn-success">Seguridad y contraseñas<i class="material-icons" ></i></a> Ver y administrar la seguridad de datos de acceso del vendedor</td></tr>

            </thead>

        </table>
    </div>
    <div align="center" class="floating">

        </a>
    </div>
@endsection
