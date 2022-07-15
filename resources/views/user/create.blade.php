@extends('adminlte::page')

@section('title','Personal - Crear')

@section('content_header')
    <h1>Registro de Personal</h1>
@endsection

@section("content")
    <div class="row">
        <div class="col-12">

            <form method="POST" action="{{route("employees.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="full_name" class="form-control" type="text" placeholder="Nombre Completo">
                </div>

                <div class="form-group mb-3">
                    <label class="label">Puesto de Trabajo</label>
                    <input name="position" class="form-control" type="text" placeholder="Puesto de Trabajo">
                </div>

                <div class="form-group mb-3">
                    <label class="label">Dirección</label>
                    <input name="address" class="form-control" type="text">
                </div>

                <div class="form-group mb-3">
                    <label class="label">Teléfono</label>
                    <input name="phone" class="form-control" type="tel">
                </div>
                
                <a class="btn" href="{{route("employees.index")}}">Cancelar</a>
                <button class="btn btn-success" type="submit">Guardar</button>

            </form>
        </div>
    </div>
    
@endsection
