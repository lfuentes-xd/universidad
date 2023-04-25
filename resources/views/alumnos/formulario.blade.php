<div class="form-floating mb-3">
    <input type="number" id="matricula" name="matricula" class="form-control" placeholder="Matricula del alumno"
      @if(isset($alumnos))
        value={{$alumnos->matricula}}
      @endif
      required/>
    <label for="matricula" class="form-label fuente">Matricula alumno:</label>
  </div>
  <div class="form-floating mb-3">
    <input type="name" id="nombre" name="nombre" class="form-control" placeholder="Nombre del alumno"
      @if(isset($alumnos))
        value={{$alumnos->nombre}}
      @endif
    required/>
    <label for="nombre" class="form-label fuente">Nombre del alumno:</label>
  </div>
  <div class="form-floating mb-3">
    <input type="name" id="apPat" name="apPat" class="form-control" placeholder="Apellido Paterno"
      @if(isset($alumnos))
        value={{$alumnos->apellidoP}}
      @endif
      required/>
    <label for="apPat" class="form-label fuente">Apellido Paterno:</label>
  </div>
  <div class="form-floating mb-3">
    <input type="name" id="apMat" name="apMat" class="form-control" placeholder="Apellido Materno"
      @if(isset($alumnos))
        value={{$alumnos->apellidoM}}
      @endif
      required/>
    <label for="apMat" class="form-label fuente">Apellido Materno:</label>
  </div>
  <div class="input-group mb-3">
    <div class="input-group-text">
      <input class="form-check-input mt-0" type="radio" value="masculino" aria-label="Masculino"
      id="sexo" name="sexo"
      @if(isset($alumnos))
        @if ($alumnos->sexo=="masculino")
          checked
        @endif
      @endif
      />
    </div>
    <input type="text" class="form-control fuente" aria-label="Masculino" value="Masculino">
    <div class="input-group-text">
      <input class="form-check-input mt-0" type="radio" value="femenino" aria-label="Femenino"
      id="sexo" name="sexo"
      @if(isset($alumnos))
        @if ($alumnos->sexo=="femenino")
          checked
        @endif
      @endif
      required/>
    </div>
    <input type="text" class="form-control fuente" aria-label="Femenino" value="Femenino">
  </div>
    <div class="form-floating mb-3">
      <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad"
        @if(isset($alumnos))
          value={{$alumnos->edad}}
        @endif
        required/>
      <label for="edad" class="form-label fuente">Edad</label>
    </div>
    <div class="input-group mb-3">
      <label class="input-group-text form-label" for="foto">Foto del alumno</label>
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
  <div class="mb-3">
    <select class="form-select" aria-label="Carreras en la escuela" id="carrera_id" name="carrera_id" required>
      <option selected>Selecciona una carrera</option>
      @foreach ($carreras as $carrera)
      <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="text-center">
    <a class="btn btn-danger" href="{{url('/alumnos')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Alumno</button>
  </div>
