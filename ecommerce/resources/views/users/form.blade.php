{!! Form::open(['url'=>$url,'method'=>$method]) !!}
<div class="form-group">
    {{Form::text('name',$user->name,['class'=>'form-control',
    'placeholder'=>'Nombre usuario'])}}
</div>
<div class="form-group">
    {{Form::text('email',$user->email,['class'=>'form-control',
    'placeholder'=>'correo usuario'])}}
</div>
<div class="form-group" >
    {{Form::text('password',$user->password,['class'=>'form-control',
       'placeholder'=>'password','input type'=>'password'])}}

</div>

<div class="form-group text-right">
    <a href="{{url('/users')}}" class="btn btn-success">Menu de datos</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}