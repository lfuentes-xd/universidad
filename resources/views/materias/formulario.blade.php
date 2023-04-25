<div class="form-floating my-5">
    <input type="text" name="nombre" id="nombre" class="form-control"
        @if (isset($materias)) value={{ $materias->materias }} @endif required />
    <label for="name" class="form-label fuente">Nombre de la materia: </label>
</div>
<div class="mb-3">
    <select class="form-select" aria-label="Carreras en la escuela" id="carrera" name="carrera">
        <option selected>Selecciona una carrera</option>
        @foreach ($carreras as $carrera)
            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
        @endforeach
    </select>
</div>
<div class="form-floating my-5">
    <input type="number" name="creditos" id="creditos" class="form-control"
        @if (isset($materias)) value={{ $materias->creditos }} @endif required />
    <label for="carrera" class="form-label fuente">cantidad de creditos:</label>
</div>
<div class="text-center">
    <a class="btn btn-danger" href="{{ url('/materias') }}" role="button">Cancelar</a>
    <button type="button" class="btn btn-success" onclick="validarSeleccion()">Registrar</button>
</div>

<script>
    function validarSeleccion() {
        var miSelect = document.getElementById("carrera");
        if (miSelect.value === "Selecciona una carrera") {
            alert("Por favor, seleccione una opción");
            return false;
        }
        document.getElementById("formulario").submit();
    }
</script>
