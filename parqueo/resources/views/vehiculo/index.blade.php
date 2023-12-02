@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('mensaje'))

{{ Session::get('mensaje') }}
@endif

<a href="{{ url('/vehiculo/create') }}" class="btn btn-success">Registrar Un Nuevo Vehiculo</a>
<br>
<br>
<table class="table table-dark">
    <thead class="thead-ldark">
        <tr>
            <th>ID</th>
            <th>placa</th>
            <th>tipo Vehiculo</th>
            <th>Fecha</th>
            <th>hora Entrada</th>
            <th>hora Salida</th>
            <th>foto</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
        @Foreach( $vehiculos as $vehiculo )
        <tr>
            <td>{{ $vehiculo->id }}</td>
            <td>{{ $vehiculo->placa }}</td>
            <td>{{ $vehiculo->tipoVehiculo }}</td>
            <td>{{ $vehiculo->Fecha }}</td>
            <td>{{ $vehiculo->horaEntrada }}</td>
            <td>{{ $vehiculo->horaSalida }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$vehiculo->foto }}" width="100" alt="">
            </td>
            <th>
                <a href="{{ url('/vehiculo/'.$vehiculo->id.'/edit') }}" class="btn btn-primary">
                    Editar
                </a>
            
                <form action="{{ url('/vehiculo/'.$vehiculo->id ) }}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger" onclick="return confirm('Desea Borrar?')">Borrar</button>
                    
                </form>
                
            
            </th>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection