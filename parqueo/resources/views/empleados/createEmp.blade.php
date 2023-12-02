<!-- resources/views/empleado/create.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
        @csrf
        @include('empleados.formEmp', ['modo' => 'Crear'])

    </form>
</div>

@endsection
