<div class="form-floating my-5">
    <input
      type="name"
      id="nombre"
      name="nombre"
      class="form-control"
      @if(isset($carreras))
        value={{$carreras->nombre}}
      @endif
    required/>
    <label for="name" class="form-label ">Nombre de la carrera:</label>
  </div>
  <div class="form-floating my-5">
    <input
      type="number"
      id="creditos"
      name="creditos"
      class="form-control"
      @if(isset($carreras))
        value={{$carreras->creditos}}
      @endif
    required/>
    <label for="creditos" class="form-label ">Total de creditos</label>
    </div>
  <div class="text-center">
      <a class="btn btn-danger" href="{{url('/carreras')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-success">Registrar</button>
  </div>
