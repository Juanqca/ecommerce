{{Form::open(['url'=>'/promotions/'.$promotions->id,'method' => 'DELETE'])}}
<input type="submit" class="btn btn-info red-text no-padding no-margin " value="Eliminar">
{!! Form::close() !!}