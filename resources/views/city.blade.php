@extends("template")

@section("Titulo")
    Listado de Ciudad
@endsection

@section("contenido")
    <table class="table">
        <thead>
        <tr>
            <th>CODIGO</th>
            <th>NOMBRE DE CIUDAD</th>
            <th>DEPARTAMENTO</th>
            <th>OPCIONES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($city as $departamento)
            <tr>
                <td>{!! $departamento->id !!}</td>
                <td>{!! $departamento->name !!}</td>
                <td>{!! $departamento->county->name !!}</td>
                <td><a href="">editar</a></td>
                <td><a href="">eliminar</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection