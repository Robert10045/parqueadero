<!-- resources/views/empleado/index.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">

    @if(session('mensaje'))
        {{ session('mensaje') }}
    @endif

    <a href="{{ url('/empleados/create') }}" class="btn btn-success">Registrar un Nuevo Empleado</a>
    <br>
    <br>
    <table class="table table-dark">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Valor</th>
            </tr>
        </thead>

        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->cargo }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>{{ $empleado->fecha_contrato }}</td>
                    <td>
                        <a href="{{ url('/empleados/'.$empleado->id.'/edit') }}" class="btn btn-primary">Editar</a>
                        <form action="{{ url('/empleados/'.$empleado->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea Borrar?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
