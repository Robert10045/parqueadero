<!-- resources/views/empleado/form.blade.php -->
<h1> {{ $modo }} Pago De Empleados </h1>
<div class="mb-3">
    <label for="nombre" class="form-label">ID</label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : old('nombre') }}" required>
</div>

<div class="mb-3">
    <label for="cargo" class="form-label">Fecha De Pago</label>
    <input type="text" class="form-control" name="cargo" value="{{ isset($empleado->cargo) ? $empleado->cargo : old('cargo') }}" required>
</div>

<div class="mb-3">
    <label for="salario" class="form-label">Valor</label>
    <input type="number" class="form-control" name="salario" value="{{ isset($empleado->salario) ? $empleado->salario : old('salario') }}" required>
</div>

<a class="btn btn-primary" href="{{ route('empleados.index') }}">Regresar</a>
