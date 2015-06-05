@extends('template')



@section('titulo')
    hola
@endsection

@section('contenido')
    {!! Form::open(['url' => '/departamento']) !!}
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresar nombre de departamento']) !!};
    <div>


        {!! Form::submit('Guardar') !!}
    </div>
    </div>
    {!! Form::close() !!}

@endsection