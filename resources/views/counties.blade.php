@extends("template")

@section("Titulo")
    Listado de empleado
    @endsection

@section("contenido")
   <table class="table">
     <thead>
            <tr>
              <th>CODIGO</th>
              <th>NOMBRE DE DEPARTAMENTO</th>
              <th>OPCIONES</th>
            </tr>
     </thead>
            <tbody>
            @foreach($departamentos as $departamento)
            <tr>
                <td>{!! $departamento->id !!}</td>
                <td>{!! $departamento->name !!}</td>
                <td><a href="">editar</a></td>

            </tr>
             @endforeach
            </tbody>
   </table>
@endsection