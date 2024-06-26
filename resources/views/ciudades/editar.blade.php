@extends('base')
@include('includes/navbar')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <div class="card shadow" style="width: 30rem">
            <div class="card-header bg-secondary">
                <h3 class="text-white">Editar ciudad "{{ $ciudad['nombre'] }}"</h3>
            </div>
            <div class="card-body">
                <form action="{{route('actualizarCiudad', ['id'=>$ciudad['idCiudad']])}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="nombre" value="{{ $ciudad['nombre'] }}"
                            placeholder="Nombre de la ciudad" class="form-control rounded-pill mx-3">
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" value="Actualizar" class="btn btn-secondary rounded-pill w-100 m-3">
                        <a href="{{ route('admin') }}" class="btn btn-outline-secondary rounded-pill w-100 mx-3">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
