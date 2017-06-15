@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="page-header">
			<h1><i class="fa fa-users"></i>Registro de Usuarios</h1>
    </div>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="page text-center">
                
                
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-6 form-group">Primer Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name" class="col-md-6 form-group">Apellido</label>
                            
                            <div class="col-md-6">
				                <input id="last_name" class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
                             </div>

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-6 form-group">Correo Electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label for="user" class="col-md-6 form-group">User</label>
                            
                        <div class="col-md-6">
				            <input id="user" class="form-control" type="text" name="user" value="{{ old('user') }}">
                        </div>

                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="address" class="col-md-6 form-group">Direccion</label>
                            
                        <div class="col-md-6">
				            <input id="address" class="form-control" type="text" name="address" value="{{ old('address') }}">
                        </div>

                        </div>
                        
                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-6 form-group">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-6 form-group">Confirme su contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
