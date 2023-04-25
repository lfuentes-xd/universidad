@extends('principal')

@section('contenido')
<br> <br><br><br><br>
    <div class="text-center">
        <h2>Cambio de alumno</h2>
        <p class="lead">Completa los datos solicitados</p>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="{{asset('/alumnos/'.$alumnos->id)}}" method="POST">
                @csrf
                @method('PATCH')
            @include('alumnos.formulario')
        </div>
    </div>
@endsection
