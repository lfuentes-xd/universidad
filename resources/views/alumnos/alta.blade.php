@extends('principal')

@section('contenido')
<br> <br><br><br><br>
    <div class="text-center">
        <h2>Registro de alumnos</h2>
        <p class="lead">Completa los datos solicitados</p>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <form class="mt-0" action="/alumnos" method="POST" enctype="multipart/form-data">
                @csrf
                @include('alumnos.formulario')
            </form>
        </div>
    </div>
@endsection
