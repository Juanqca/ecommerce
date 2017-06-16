{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
<thead>
<tr>
    <td><b>Nombre:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::textarea('name',$promotions->name,['class'=>'form-control','placeholder'=> 'Nombre Promoción'])}}
</div>
<thead>
<tr>
    <td><b>Descripción:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::textarea('description',$promotions->description,['class'=>'form-control','placeholder'=>'Escribe tu descripción'])}}
</div>
<thead>
<tr>
    <td><b>Fecha inicio:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::textarea('description',$promotions->fechainicio,['class'=>'form-control','placeholder'=>'1/12/17'])}}
</div>
<thead>
<tr>
    <td><b>Fecha caducidad:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::textarea('description',$promotions->fechafinal,['class'=>'form-control','placeholder'=>'5/12/17'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/promotions')}}" class="btn btn-success">
        Volver al menu de promociones
    </a>
    <input type="submit" value="Enviar" class="btn btn-success">

</div>
{!! Form::close() !!}