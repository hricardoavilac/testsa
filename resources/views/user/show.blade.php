@extends('layouts.app')

@section('title','tipo')


@section('headlinks')
@endsection

@section('content')

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Contrato </h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-header">
                <div class="row">

                    <div class="col-md-10">
                        {{-- <h3 class="card-title">{{ $contrato->name }}</h3> --}}
                    </div>
                    @can('Editar Contratos')
                    <div class="col-md-2">
                        <a class="btn btn-info btn-sm" href="{{route('dashboard.contratos.edit',$contrato->id)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Editar
                        </a>
                    </div>
                    @endcan
                </div>
            </div>
            <div class="card-body">
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Vendedor</td>
                            <td> {{$contrato->vendedor->nombre ?? ''}} </td>
                        </tr>
                        <tr>
                            <td>Cliente</td>
                            <td> {{$contrato->cliente->nombres}} </td>
                        </tr>
                        <tr>
                            <td>Proyecto</td>
                            <td> {{$contrato->proyecto->nombre}} </td>
                        </tr>
                        <tr>
                            <td>Sector</td>
                            <td> {{$contrato->sector->nombre}} </td>
                        </tr>
                        <tr>
                            <td>Manzana</td>
                            <td> {{$contrato->manzana->nombre}} </td>
                        </tr>
                        <tr>
                            <td>Lote</td>
                            <td> {{$contrato->lote->nombre}} </td>
                        </tr>
                        <tr>
                            <td>Fecha de Contrato</td>
                            <td> {{$contrato->fecha_contrato}} </td>
                        </tr>
                        <tr>
                            <td>Valor de la Vara Cuadrada</td>
                            <td> {{$contrato->valor_v2}} </td>
                        </tr>
                        <tr>
                            <td>Área en Varas Cuadradas</td>
                            <td> {{$contrato->area_v2}} </td>
                        </tr>
                        <tr>
                            <td>Precio de Contado</td>
                            <td> {{$contrato->precio_contado}} </td>
                        </tr>
                        <tr>
                            <td>Tasa de Interés</td>
                            <td> {{$contrato->tasa_interes}} </td>
                        </tr>
                        <tr>
                            <td>Finca</td>
                            <td> {{$contrato->finca}} </td>
                        </tr>
                        <tr>
                            <td>Folio</td>
                            <td> {{$contrato->folio}} </td>
                        </tr>
                        <tr>
                            <td>Libro</td>
                            <td> {{$contrato->libro}} </td>
                        </tr>
                        <tr>
                            <td>Descuento</td>
                            <td> {{$contrato->descuento}} </td>
                        </tr>
                        <tr>
                            <td>Valor de Escrituración</td>
                            <td> {{$contrato->valor_escritura}} </td>
                        </tr>
                        <tr>
                            <td>Derecho de Agua (Titulo)</td>
                            <td> {{$contrato->derecho_agua}} </td>
                        </tr>
                        <tr>
                            <td>Número de Cuotas</td>
                            <td> {{$contrato->no_cuotas}} </td>
                        </tr>
                        <tr>
                            <td>Valor del Seguro</td>
                            <td> {{$contrato->valor_seguro}} </td>
                        </tr>
                        <tr>
                            <td>Fecha de Próximo Pago</td>
                            <td> {{$contrato->proxima_fecha_pago}} </td>
                        </tr>
                        <tr>
                            <td>Valor de la Cuota (Calculado)</td>
                            <td> {{$contrato->valor_cuota}} </td>
                        </tr>
                        <tr>
                            <td>Monto de Enganche</td>
                            <td> {{$contrato->valor_enganche}} </td>
                        </tr>
                        <tr>
                            <td>Cuotas de enganche</td>
                            <td> {{$contrato->cuotas_enganche}} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection

@section('footscripts')
@endsection
