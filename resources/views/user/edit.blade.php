@extends('adminlte::page')

@section('title','Personal - Edición')

@section('content_header')
    <h1>Modificación de Datos de Personal</h1>
@stop

@section("content")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("employees.update", [$employee])}}">
                @method("PUT")
                @csrf

                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="full_name" class="form-control" type="text" placeholder="Nombre Completo"
                        value="{{$employee->full_name}}" >
                </div>

                <div class="form-group mb-3">
                    <label class="label">Puesto de Trabajo</label>
                    <input name="position" class="form-control" type="text" placeholder="Puesto de Trabajo"
                        value="{{$employee->position}}">
                </div>

                <div class="form-group mb-3">
                    <label class="label">Dirección</label>
                    <input name="address" class="form-control" type="text"
                    value="{{$employee->address}}">
                </div>

                <div class="form-group mb-3">
                    <label class="label">Teléfono</label>
                    <input name="phone" class="form-control" type="tel"
                    value="{{$employee->phone}}">
                </div>
                
                {{-- @include("notification") --}}
                <a class="btn" href="{{route("employees.index")}}">Volver</a>
                <button class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
@endsection