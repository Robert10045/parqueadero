<h1> {{ $modo }} Empleado </h1>
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : old('nombre') }}" required>
</div>

<div class="mb-3">
    <label for="cargo" class="form-label">Cargo</label>
    <input type="text" class="form-control" name="cargo" value="{{ isset($empleado->cargo) ? $empleado->cargo : old('cargo') }}" required>
</div>

<div class="mb-3">
    <label for="salario" class="form-label">Salario</label>
    <input type="number" class="form-control" name="salario" value="{{ isset($empleado->salario) ? $empleado->salario : old('salario') }}" required>
</div>

<div class="mb-3">
    <label for="fecha_contrato" class="form-label">Fecha de Contrato</label>
    <input type="date" class="form-control" name="fecha_contrato" value="{{ isset($empleado->fecha_contrato) ? $empleado->fecha_contrato : old('fecha_contrato') }}" required>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ route('empleados.index') }}">Regresar</a>
