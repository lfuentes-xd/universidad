@extends('principal')


@section('contenido')
    <br><br><br>
    <div class="container">
        <div>
            <a href="{{ asset('/carreras/create') }}">
                <button class="btn btn-success" type="submit" value="nuevo" id="nuevo">
                    agregar nuevo
                </button>
            </a>
        </div>
        <br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre carrera</th>
                    <th>creditos</th>
                    <th>
                        <span>
                            <i class="fi fi-rr-edit"></i>
                        </span>
                    </th>
                    <th>
                        <span>
                            <i class="fi fi-rr-cross"></i>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carreras as $car)
                    <tr>
                        <td>{{ $car->nombre }}</td>
                        <td>{{ $car->creditos }}</td>
                        <td>
                            <a href={{ asset('/carreras/' . $car->id . '/edit') }} class="btn btn-warning"
                                role="button">Editar</a>
                        </td>
                        <td>
                            <a href="{{}}">
                                <input type="submit" name="eliminar" id="eliminar" value="Eliminar"
                                    class="btn btn-danger">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
