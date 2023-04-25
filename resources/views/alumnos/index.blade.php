@extends('principal')

@section('contenido')
<br>
    <br><br>
    <div class="container">
        <div class="row">
            <h2>Alumnos inscritos</h2>
            <br><br>
            <a href="{{ asset('/alumnos/create') }}">
                <button class="btn btn-success" type="button">
                    agregar nuevo
                </button>
            </a>
            <br><br>
            @foreach ($alumnos as $al)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('/storage') . '/' . $al->foto }}" class="img-fluid rounded-start"
                                alt="foto del alumno">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Alumno: {{ $al->nombre }}</h5>
                                <p class="card-text">
                                    Matricula:{{ $al->matricula }} <br>
                                    Nombre:{{ $al->nombre . ' ' . $al->apellidoP . ' ' . $al->apellidoM }} <br>
                                    Sexo:{{ $al->Sexo }} <br>
                                    Edad:{{ $al->edad }} <br>
                                    Carrera:{{ $al->carrera }} <br>

                                    <a href="{{ asset('/alumnos/' . $al->id . '/edit') }}"
                                        class="btn btn-warning">editar</a> <br>

                                <form action="{{ asset('/alumnos/' . $al->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Borrar"
                                        onClick="return confirm('¿Estas seguro?')">
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
