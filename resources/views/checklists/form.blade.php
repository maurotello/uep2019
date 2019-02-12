<div class="row">
    <div class="form-group col-sm-11">
        {!! Form::label('proyecto_id', 'Proyecto') !!}
        <input type="text" id="proyecto_nombre" class="form-control" name="proyecto_nombre" value="{{ $proyecto->nombre  }}" />
        <input style="visibility:hidden" type="text" id="proyecto_id" class="form-control" name="proyecto_id" value="{{ $proyecto->id }}" />
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('nota_oficial', 'Nota oficial') !!}
        <input type="checkbox" name="nota_oficial" id="nota_oficial" {{ $checklist[0]['nota_oficial'] == 'on'?"checked":''}} >


    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('nota_oficial_c', 'Comentario') !!}
        {!! Form::text($checklist[0]['nota_oficial_c'], null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('solicitud_financiamiento', 'Sol. Financiamiento') !!}
        <input type="checkbox" name="solicitud_financiamiento" id="solicitud_financiamiento" {{ $checklist[0]['solicitud_financiamiento'] == 'on'?"checked":''}} >

    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('solicitud_financiamiento_c', 'Comentario') !!}
        {!! Form::text('solicitud_financiamiento_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('fotocopia_dni', 'Fotocopia DNI') !!}
        <input type="checkbox" name="fotocopia_dni" id="fotocopia_dni" {{ $checklist[0]['fotocopia_dni'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('fotocopia_dni_c', 'Comentario') !!}
        {!! Form::text('fotocopia_dni_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('certificado_domicilio', 'Certificado Domicilio') !!}
        <input type="checkbox" name="certificado_domicilio" id="certificado_domicilio" {{ $checklist[0]['certificado_domicilio'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('certificado_domicilio_c', 'Comentario') !!}
        {!! Form::text('certificado_domicilio_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('inscripcion_afip_rentas', 'AFIP-RENTAS') !!}
        <input type="checkbox" name="inscripcion_afip_rentas" id="inscripcion_afip_rentas" {{ $checklist[0]['inscripcion_afip_rentas'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('inscripcion_afip_rentas_c', 'Comentario') !!}
        {!! Form::text('inscripcion_afip_rentas_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('estado_civil', 'Estado Civil') !!}
        <input type="checkbox" name="estado_civil" id="estado_civil" {{ $checklist[0]['estado_civil'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('estado_civil_c', 'Comentario') !!}
        {!! Form::text('estado_civil_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('ddjj', 'DD JJ') !!}
        <input type="checkbox" name="ddjj" id="ddjj" {{ $checklist[0]['ddjj'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('ddjj_c', 'Comentario') !!}
        {!! Form::text('ddjj_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('nota_banco', 'Nota al Banco') !!}
        <input type="checkbox" name="nota_banco" id="nota_banco" {{ $checklist[0]['nota_banco'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('nota_banco_c', 'Comentario') !!}
        {!! Form::text('nota_banco_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('respuesta_banco', 'Respuesta del Banco') !!}
        <input type="checkbox" name="respuesta_banco" id="respuesta_banco" {{ $checklist[0]['respuesta_banco'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('respuesta_banco_c', 'Comentario') !!}
        {!! Form::text('respuesta_banco_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('titulo_propiedad_inmuebles', 'Propiedades Inmuebles') !!}
        <input type="checkbox" name="titulo_propiedad_inmuebles" id="titulo_propiedad_inmuebles" {{ $checklist[0]['titulo_propiedad_inmuebles'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('titulo_propiedad_inmuebles_c', 'Comentario') !!}
        {!! Form::text('titulo_propiedad_inmuebles_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('habilitaciones', 'Habilitaciones') !!}
        <input type="checkbox" name="habilitaciones" id="habilitaciones" {{ $checklist[0]['habilitaciones'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('habilitaciones_c', 'Comentario') !!}
        {!! Form::text('habilitaciones_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('titulo_propiedad_muebles', 'Propiedades Muebles') !!}
        <input type="checkbox" name="titulo_propiedad_muebles" id="titulo_propiedad_muebles" {{ $checklist[0]['titulo_propiedad_muebles'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('titulo_propiedad_muebles_c', 'Comentario') !!}
        {!! Form::text('titulo_propiedad_muebles_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('proformas', 'Proformas') !!}
        <input type="checkbox" name="proformas" id="proformas" {{ $checklist[0]['proformas'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('proformas_c', 'Comentario') !!}
        {!! Form::text('proformas_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('guia_proyecto', 'Guía Proyecto') !!}
        <input type="checkbox" name="guia_proyecto" id="guia_proyecto" {{ $checklist[0]['guia_proyecto'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('guia_proyecto_c', 'Comentario') !!}
        {!! Form::text('guia_proyecto_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>


<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('estadisticas', 'Estadísticas') !!}
        <input type="checkbox" name="estadisticas" id="estadisticas" {{ $checklist[0]['estadisticas'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('estadisticas_c', 'Comentario') !!}
        {!! Form::text('estadisticas_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('promeva', 'Promeva') !!}
        <input type="checkbox" name="promeva" id="promeva" {{ $checklist[0]['promeva'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('promeva_c', 'Comentario') !!}
        {!! Form::text('promeva_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-2">
        {!! Form::label('informe_uep', 'Informe UEP') !!}
        <input type="checkbox" name="informe_uep" id="informe_uep" {{ $checklist[0]['informe_uep'] == 'on'?"checked":''}} >
    </div>
    <div class="form-group col-sm-8">
        {!! Form::label('informe_uep_c', 'Comentario') !!}
        {!! Form::text('informe_uep_c', null, ['class' =>'form-control'] ) !!}
    </div>
</div>

<br /><br />
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::submit('GUARDAR', ['class' => 'btn btn-success']) !!}
    </div>
</div>
