@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Alertas
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Alerta
                  <p class="pull-right">
                    <a href="{{ route('alerta.index') }}" class="btn btn-sm btn-primary pull-right">
                      Volver
                    </a>
                  </p>
                </div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'alerta.store']) }}
                        @include('alertas.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
