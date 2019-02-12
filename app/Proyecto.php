<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Auditoria;
use App\Checklist;
use Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Events\ProyectoCreated;

class Proyecto extends Model
{
    /**
     * Setea la Tabla a la que pertenece el modelo
     *
     * @var string
     */

      protected $dates = ['created_at', 'updated_at', 'deleted_at', 'fechaIngreso'];

      protected $table = 'proyectos';

      protected $events = [
          'updated' => App\Events\ProyectoCreated::class,
      ];

        /**
       * Get the route key for the model.
       *
       * @return string
       */
        public function getRouteKeyName()
        {
            return 'slug';
        }

        /**
       * Asignación masiva de atributos para la insecion
       *
       * @var array
       */
      protected $fillable = [
        'fechaIngreso',
        'nombre',
        'numeroInterno',
        'numeroCfi',
        'localidad_id',
        'lineaCredito_id',
        'estado_id',
        'estadoInterno_id',
        'sector_id',
        'monto',
        'tipo',
        'domicilioProyecto',
        'domicilioLegal',
        'telefono',
        'email',
        'web',
        'tamanio',
        'productos',
        'ciuu',
        'mo',
        'enuep',
        'descripcion',
        'inversionTotal',
        'inversionRealizada',
        'inversionARealizar_af',
        'inversionARealizar_ct',
        'figuraLegal_id',
        'periodicidad_id',
        'destinoCredito_id',
        'plazoGracia',
        'plazoAmortizacion',
        'cantidadDesembolsos',
        'tasa',
        'garantia_id',
        'sucursal_id',
        'descripcionGarantia',
        'fechaTitular',
        'fechaCaducoBanco',
        'fechaAprobadoUep',
        'fechaEnviadoCfi',
        'fechaAprobadoCfi', // REMIRESol
        'fechaTramdispo',
        'fechaComunicaTran',
        'fechaDesembolso',
        'fechaEfectivizacion',
        'fechaPrimerAmort',
        'fechaDesistido',
        'fechaJudicial',
        'fechaCancelado',
        'fechaArchivado',
        'fechaEnvioBanco',
        'fechaRespuestaBanco',
        'fechaPresupuestos',
        'fechaUltimoMovimiento',
        'fechaBaja',
        'refinanciado',
        'user_id',
        'provincia_id',
        'titular',
        'observaciones',
        'color',
        'slug'
      ];
      /**
     * Normaliza y setea el nombre y el slug del Archivo
     *
     * @param $val
     */
      public function setNombreAttribute($val)
      {
          $this->attributes['nombre'] = trim($val);
          $this->attributes['slug'] = str_slug($val);
      }

      public function getNombreAttribute()
      {
          return strtoupper($this->attributes['nombre']);
      }

      public function getNombreTitularAttribute()
      {
          return strtoupper($this->attributes['nombre'] . ' - ' . $this->attributes['titular']);
      }


      /*
      COMO USAR LOS SCOPES QUE NOS AYUDAN A HACER CONSULTAS
       */
      /*
      public function scopeInThisMonthByGender($query, $gender)
      {
          return $query->where('gender', $gender)
              ->whereMonth('created_at', now()->month);
      }
      */

      //// Esto va en el Controller es como llamarlo
      //Proyecto::inThisMonthByGender('female')->get()


        /*
      Cancelling Save Operations Via Events
      If false is returned from the creating, updating, saving, or deleting events, the action will be cancelled:

      User::creating(function($user)
      {
          if ( ! $user->isValid()) return false;
      });

        */


      /**
       * Retorna la Provincia a la que pertenece la Localidad
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function localidad()
      {
          return $this->belongsTo('App\Localidad', 'localidad_id');
      }

      /**
       * Retorna el Codigo Postal de la Localidad
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function lineaCredito()
      {
          return $this->belongsTo('App\LineaCredito', 'lineaCredito_id');
      }

      public function estado()
      {
          return $this->belongsTo('App\Estado', 'estado_id');
      }

      public function estadoInterno()
      {
          return $this->belongsTo('App\EstadoInterno', 'estadoInterno_id');
      }

      public function sector()
      {
          return $this->belongsTo('App\Sector', 'sector_id');
      }

      public function figuraLegal()
      {
          return $this->belongsTo('App\FiguraLegal', 'figuraLegal_id');
      }

      public function periodicidad()
      {
          return $this->belongsTo('App\Periodicidad', 'periodicidad_id');
      }

      public function destinoCredito()
      {
          return $this->belongsTo('App\DestinoCredito', 'destinoCredito_id');
      }

      public function garantia()
      {
          return $this->belongsTo('App\Garantia', 'garantia_id');
      }

      public function sucursal()
      {
          return $this->belongsTo('App\Sucursal', 'sucursal_id');
      }
      public function provincia()
      {
          return $this->belongsTo('App\Provincia', 'provincia_id');
      }

      /**
       * Retorna el Codigo Postal de la Localidad
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function user()
      {
          return $this->belongsTo('App\User', 'user_id');
      }


      /*** trabajando sobre las fechas ***/



      public function setFechaIngresoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaIngreso'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaIngresoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaPrimerAmortAttribute($value): void
      {
          if($value)
            $this->attributes['fechaPrimerAmort'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaPrimerAmortAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaEnvioBancoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaEnvioBanco'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaEnvioBancoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaCaducoBancoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaCaducoBanco'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaCaducoBancoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaAprobadoUepAttribute($value): void
      {
          if($value)
            $this->attributes['fechaAprobadoUep'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaAprobadoUepAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaEnviadoCfiAttribute($value): void
      {
          if($value)
            $this->attributes['fechaEnviadoCfi'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaEnviadoCfiAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaAprobadoCfiAttribute($value): void
      {
          if($value)
            $this->attributes['fechaAprobadoCfi'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaAprobadoCfiAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaTramdispoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaTramdispo'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaTramdispoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaComunicaTranAttribute($value): void
      {
          if($value)
            $this->attributes['fechaComunicaTran'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaComunicaTranAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaDesembolsoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaDesembolso'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaDesembolsoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaEfectivizacionAttribute($value): void
      {
          if($value)
            $this->attributes['fechaEfectivizacion'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaEfectivizacionAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaDesistidoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaDesistido'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaDesistidoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaJudicialAttribute($value): void
      {
          if($value)
            $this->attributes['fechaJudicial'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaJudicialAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaCanceladoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaCancelado'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaCanceladoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaArchivadoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaArchivado'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaArchivadoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaRespuestaBancoAttribute($value): void
      {
        if($value)
            $this->attributes['fechaRespuestaBanco'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaRespuestaBancoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaPresupuestosAttribute($value): void
      {
          if($value)
            $this->attributes['fechaPresupuestos'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaPresupuestosAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaUltimoMovimientoAttribute($value): void
      {
          if($value)
            $this->attributes['fechaUltimoMovimiento'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaUltimoMovimientoAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaTitularAttribute($value): void
      {
          if($value)
            $this->attributes['fechaTitular'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaTitularAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/

      public function setFechaBajaAttribute($value): void
      {
          if($value)
            $this->attributes['fechaBaja'] = \Carbon\Carbon::createFromFormat(config('app.date_format'), $value)->format('Y-m-d');
      }

      public function getFechaBajaAttribute($value)
      {
        if($value)
          return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format(config('app.date_format'));
      }

      /*********************************************************/


      /**** TERMINE trabajando sobre las fechas ************/

      public static function boot() {
          parent::boot();

          static::creating(function ($proyecto) {
              return $proyecto->provincia_id = Auth::user()->provincia_id;

          });

          static::updating(function($proyecto) {

              foreach ($proyecto->getDirty() as $key => $value) {
                if (!($key == 'slug'))
                {
                    $control = new Auditoria;
                    $control->user_id = Auth::user()->id;
                    $control->fecha = Carbon::now()->toDateTimeString();
                    $control->fila_id = $proyecto->id;
                    $control->modelo = 'Proyecto';
                    $control->campo = $key;
                    $control->valor_anterior = $proyecto->getOriginal($key);
                    $control->valor_actual = $value;
                    $control->save();
                }
                
                if ($key == 'nota_oficial'){
                    $check = Checklist::where('proyecto_id', $proyecto_id)->update(array('nota_oficial'=> $value));
                    //$check = DB::table('checklists')->where('proyecto_id', $proyecto->id)->get();
                    //$check->nota_oficial = $value;
                    //$check->save();
                }


              }
        //    return $proyecto->fechaPrimerAmort = \Carbon\Carbon::parse($proyecto->fechaIngreso)->format('Y-m-d');
          });

          static::updated(function($proyecto) {

          });


          static::created(function ($model) {

          });
      }

}
