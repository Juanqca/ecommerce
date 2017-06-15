@extends('layouts.app')

@section('content')

 <div class="container text-center">
    <div class="page-header">
            <h1><i class="fa fa-user">Iniciar Sesión</i></h1>
    </div>
     
     
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <div class="panel panel-default">
               
                <div class="page">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                               <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
 <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-user">Iniciar Sesión</i></h1>
        </div>
        
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="page">

                    

                    <form method="POST" action="/auth/login">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            Correo Electronico
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            Password
                            <input class="form-control"type="password" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember"> Recordarme
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </div>
                </form>
                </div>
            </div> 
        </div>       
    </div>
-->
@endsection
