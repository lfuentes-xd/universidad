@extends('principal')

@section('contenido')
    <div class="text-center">
        <div style="margin-top: 5%">
            <h2>Nueva Materia</h2>
            <p class="lead">completa todos los datos</p>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">
                    <form class="mt-0" action="/materias" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('materias.formulario')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
