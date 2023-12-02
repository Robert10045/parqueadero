<h1> {{ $modo }} Vehiculo </h1>
<div class="mb-3">
      <label for="" class="form-label">placa</label>
      <input type="text"
        class="form-control" name="placa" value="{{ isset($vehiculo->placa)?$vehiculo->placa:'' }}" id="placa" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">tipoVehiculo</label>
      <input type="text"
        class="form-control" name="tipoVehiculo" value="{{ isset($vehiculo->tipoVehiculo)?$vehiculo->tipoVehiculo:'' }}" id="tipoVehiculo" aria-describedby="helpId" placeholder="">

    </div>

    <div class="mb-3">
      <label for="" class="form-label">Fecha</label>
      <input type="date"
        class="form-control" name="Fecha" value="{{ isset($vehiculo->Fecha)?$vehiculo->Fecha:'' }}" id="Fecha" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">horaEntrada</label>
      <input type="time"
        class="form-control"  name="horaEntrada"  value="{{ isset($vehiculo->horaEntrada)?$vehiculo->horaEntrada:'' }}" id="horaEntrada" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">horaSalida</label>
      <input type="time"
        class="form-control"  name="horaSalida" value="{{ isset($vehiculo->horaSalida)?$vehiculo->horaSalida:'' }}" id="horaSalida" aria-describedby="helpId" placeholder="">

    </div>
     
    <div class="mb-3">
      <label for="" class="form-label"></label>
      @if(isset($vehiculo->foto))
      <img src="{{ asset('storage').'/'.$vehiculo->foto }}" width="100" alt="">
      @endif
      <input type="file" class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId">
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos" >

    <a class="btn btn-primary" href="{{ url('/vehiculo/') }}"> Regresar</a>