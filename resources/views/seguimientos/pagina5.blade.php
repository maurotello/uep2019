
<!-- INICIO PAGINA 5 -->

<div class="row">
  <div class="form-group col-sm-10">
    13. SE HAN REGISTRADO CAMBIOS SIGNIFICATIVOS EN LOS COSTOS TOTALES DE PROEUCCIÓN?
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">

        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>CONCEPTO</th>
                <th  class="text-center" width="15%">SI / NO</th>
                <th  class="text-center" width="10%">%</th>
                <th  class="text-center" width="50%">RAZONES</th>
                
            </tr>
            </thead>
           
            <tbody>
                <tr>
                    <td>Materia Prima</td>
                    <td class="text-center"> {!! Form::select('13_materia_prima_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => '13_materia_prima_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td>
                    <td> {!! Form::text('13_materia_prima_porcentaje', null, ['class' => 'form-control']) !!} </td>
                    <td> {!! Form::text('13_materia_prima_razones', null, ['class' => 'form-control']) !!} </td>
                </tr>

                <tr>
                    <td>Insumos</td>
                    <td class="text-center"> {!! Form::select('13_insumos_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => '13_insumos_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td>
                    <td> {!! Form::text('13_insumos_porcentaje', null, ['class' => 'form-control']) !!} </td>
                    <td> {!! Form::text('13_insumos_razones', null, ['class' => 'form-control']) !!} </td>
                </tr>

                <tr>
                    <td>Mano de Obra</td>
                    <td class="text-center"> {!! Form::select('13_mano_obra_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => '13_insumos_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td>
                    <td> {!! Form::text('13_mano_obra_porcentaje', null, ['class' => 'form-control']) !!} </td>
                    <td> {!! Form::text('13_mano_obra_razones', null, ['class' => 'form-control']) !!} </td>
                </tr>

                <tr>
                    <td>Otros</td>
                    <td class="text-center"> {!! Form::select('13_otros_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => '13_otros_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td>
                    <td> {!! Form::text('13_otros_porcentaje', null, ['class' => 'form-control']) !!} </td>
                    <td> {!! Form::text('13_otros_razones', null, ['class' => 'form-control']) !!} </td>
                </tr>
              
            </tbody>
        </table>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-6">
    14. MANO DE OTRA EMPLEADA
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-4">
      <table id="table" class="table table-striped table-bordered">
         
          <tr>
              <th>ANTES DEL CRÉDITO</th>
              <td> {!! Form::text('mo_antes_del_credito', null, ['class' => 'form-control']) !!} </td>
             
          </tr>
          <tr>
            <th>CON EL CRÉDITO</th>
            <td> {!! Form::text('mo_con_el_credito', null, ['class' => 'form-control']) !!} </td>
           
          </tr>

          <tr>
              <th>PERMANENTE</th>
              <td> {!! Form::text('mo_permanente', null, ['class' => 'form-control']) !!} </td>
              
          </tr>
          <tr>
            <th>TEMPORARIA</th>
            <td> {!! Form::text('mo_temporaria', null, ['class' => 'form-control']) !!} </td>
            
          </tr>
      </table>
  </div>
</div>

<div class="row">
  <div class="form-group col-sm-10">
    ACLARACIONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('14_mo_aclaraciones', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    15. LA EMPRESA TIENE PROBLEMAS DE FUNCIONAMIENTO?
  </div>
</div>
<div class="row">
  <div class="form-group col-sm-3">
      <table id="table" class="table table-striped table-bordered">
          <thead>
          <tr>
              <th>SI / NO</th>   
          </tr>
          </thead>
          <tbody>
              <tr>
                  <td> {!! Form::select('problemas_funcionamiento_si_no', [''=>'Seleccione', 'SI'=>'SI', 'NO'=>'NO'], null, ['class' => 'form-control', 'id' => 'problemas_funcionamiento_si_no', 'data-live-search' => 'true', 'data-max-options' => '1']  )  !!} </td>
              </tr>
          </tbody>
      </table>
  </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    15.1. CUALES?
  </div>
</div>




<div class="row">
    <div class="form-group col-sm-7">
        <ul class="list-group">
            <li class="list-group-item">
                a. Administrativos-contables
                <div class="material-switch pull-right">
                    @if ($action == 'create')
                      <input type="checkbox" name="p_admin_15_1" id="p_admin_15_1">
                    @else
                        <input type="checkbox" name="p_admin_15_1" id="p_admin_15_1" {{$seguimiento->p_admin_15_1 == 'on'?"checked":''}}>
                    @endif
                    <label for="p_admin_15_1" class="label-primary"></label>
                </div>
            </li>
            <li class="list-group-item">
                b. En la provisión de Materia Prima y/o insumos
                <div class="material-switch pull-right">
                    @if ($action == 'create')
                      <input type="checkbox" name="p_mp_15_1" id="p_mp_15_1">
                    @else
                        <input type="checkbox" name="p_mp_15_1" id="p_mp_15_1" {{$seguimiento->p_mp_15_1 == 'on'?"checked":''}}>
                    @endif
                    <label for="p_mp_15_1" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                c. En cuanto a la disponibilidad de mano de obra
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_disp_mo_15_1" id="p_disp_mo_15_1">
                  @else
                      <input type="checkbox" name="p_disp_mo_15_1" id="p_disp_mo_15_1" {{$seguimiento->p_disp_mo_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_disp_mo_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                d. En cuanto a la calificación de mano de obra
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_calif_mo_15_1" id="p_calif_mo_15_1">
                  @else
                      <input type="checkbox" name="p_calif_mo_15_1" id="p_calif_mo_15_1" {{$seguimiento->p_calif_mo_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_calif_mo_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                e. Técnicos en el proceso de producción
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_proc_prod_15_1" id="p_proc_prod_15_1">
                  @else
                      <input type="checkbox" name="p_proc_prod_15_1" id="p_proc_prod_15_1" {{$seguimiento->p_proc_prod_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_proc_prod_15_1" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                f. De comercialización y mercado
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_comer_15_1" id="p_comer_15_1">
                  @else
                      <input type="checkbox" name="p_comer_15_1" id="p_comer_15_1" {{$seguimiento->p_comer_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_comer_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                g. Financieros
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_finan_15_1" id="p_finan_15_1">
                  @else
                      <input type="checkbox" name="p_finan_15_1" id="p_finan_15_1" {{$seguimiento->p_finan_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_finan_15_1" class="label-primary"></label>
                </div>
            </li>

            <li class="list-group-item">
                h. De infraestructura de servicios<br>(especificar: comunicciones, energía, etc)
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_serv_15_1" id="p_serv_15_1">
                  @else
                      <input type="checkbox" name="p_serv_15_1" id="p_serv_15_1" {{$seguimiento->p_serv_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_serv_15_1" class="label-primary"></label>
                </div>
            </li>

           


            <li class="list-group-item">
                i. Climáticos
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_cli_15_1" id="p_cli_15_1">
                  @else
                      <input type="checkbox" name="p_cli_15_1" id="p_cli_15_1" {{$seguimiento->p_cli_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_cli_15_1" class="label-primary"></label>
                </div>
            </li>


            <li class="list-group-item">
                j. Otros (especificar)
                <div class="material-switch pull-right">
                  @if ($action == 'create')
                      <input type="checkbox" name="p_otros_15_1" id="p_otros_15_1">
                  @else
                      <input type="checkbox" name="p_otros_15_1" id="p_otros_15_1" {{$seguimiento->p_otros_15_1 == 'on'?"checked":''}}>
                  @endif
                    <label for="p_otros_15_1" class="label-primary"></label>
                </div>
            </li>

          </ul>    

    </div>
</div>


<div class="row">
  <div class="form-group col-sm-10">
    15.2. DESCRIPCIÓN DE LOS PROBLEMAS CONSIGNADOS Y PROPUESTA DE SOLUCIONES
  </div>
</div>

<div class="row">
    <div class="form-group col-sm-11">
          {!! Form::textarea('15_2_descripcion_problmeas', null, ['class' => 'form-control', 'rows' => 3, 'data-toggle'=>'tooltip', 'data-placement'=>'bottom']) !!}
          
    </div>
</div>


