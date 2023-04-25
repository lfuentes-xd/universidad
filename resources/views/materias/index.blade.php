@extends('principal')

@section('contenido')
<br><br>
    <div class="container">
        <br><br>
        <a href="{{asset('materias/create')}}">
            <button class="btn btn-success" type="button">
                nueva materia
            </button>
        </a>
        <br>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">materias</th>
                    <th scope="col">carrera</th>
                    <th scope="col">creditos</th>
                    <th scope="col">
                        <i class="fi fi-rr-edit"></i>
                    </th>
                    <th scope="col">
                        <i class="fi fi-rr-cross"></i>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($materias as $mat)
                <tr>
                    <td>{{$mat->materias}}</td>
                    <td>{{$mat->carrera}}</td>
                    <td>{{$mat->creditos}}</td>
                    <td>
                       <a href="{{asset('/materias/'.$mat->id.'/edit')}}"
                        role="button"
                        class="btn btn-warning">modificar</a>
                    </td>
                    <td>
                        <form action="{{asset('/materias/'.$mat->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
