@php
    $edit = isset($cargo);
@endphp

<div class="card-body">

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Tipo de Cargo</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body">

            {{--            Tipo de Cobro--}}
            <div class="form-group">

                <label class="control-label" for="idTipoCobro">Tipo de Cobro</label>

                {!! Form::select('idTipoCobro', $cobroTipo, null, [
                    'class' => 'form-control select25 '.($errors->has('idTipoCobro') ? ' is-invalid' : ''),
                    'placeholder' => '',
                ]) !!}
                @if ($errors->has('idTipoCobro'))
                    <span class="has-error">{{ $errors->first('idTipoCobro') }}</span>
                @endif
            </div>

            {{--            Descripcion --}}
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                {!! Form::text('descripcion', null, ['class' => 'form-control'.($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción', 'required' => true ]) !!}
                @if ($errors->has('descripcion'))
                    <span class="has-error">{{ $errors->first('descripcion') }}</span>
                @endif
            </div>

            {{--            Monto --}}
            <div class="form-group">
                <label for="monto">Monto</label>

                {!! Form::number('monto', null, ['class' => 'form-control'.($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto', 'required' => true ]) !!}

                @if ($errors->has('monto'))
                    <span class="has-error">{{ $errors->first('monto') }}</span>
                @endif


            </div>

            {{--            Observaciones --}}
            <div class="form-group">
                <label for="observaciones">Observaciones</label>
                {!! Form::textarea('observaciones', null,
                            ['class' => 'form-control'.($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese sus observaciones acerca de este tipo de cargo extra.', 'required' => false ]) !!}
                @if ($errors->has('observaciones'))
                    <span class="has-error">{{ $errors->first('observaciones') }}</span>
                @endif
            </div>

        </div>

    </div>


    {{--    {!! Form::hidden('id', null) !!}--}}
    {!! Form::hidden('Id_cargo', null) !!}
</div>
<!-- /.card-body -->
