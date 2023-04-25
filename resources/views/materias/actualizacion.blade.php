@extends('principal')

@section('contenido')
    <div class="text-center">
        <div style="margin-top: 5%">
            <h2>Modificar Materia</h2>
            <p class="lead">completa todos los datos</p>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form action="/materias/{{$materias->id}}" method="POST" id="formulario">
                @csrf
                @method('PATCH')
                @include('materias.formulario')
            </form>
        </div>
    </div>
@endsection
