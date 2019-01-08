<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AnexoProyecto extends Model
{
  /**
   * Setea la Tabla a la que pertenece el modelo
   *
   * @var string
   */
    protected $table = 'anexos_proyectos';
    protected $dates = ['deleted_at', 'fecha'];

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
        'user_id',
        'proyecto_id',
        'file',
        'fecha',
        'icon',
        'nombre_archivo',
        'slug'
    ];
    /**
   * Normaliza y setea el nombre y el slug del Archivo
   *
   * @param $val
   */
  
  public function setFechaAttribute($val)
    {
        $this->attributes['fecha'] = \Carbon\Carbon::parse($val)->format('Y-m-d');  
    }

    public function getFechaAttribute()
    {
        return  \Carbon\Carbon::parse($this->attributes['fecha'])->format('d-m-Y');
    }


    public function setNombreArchivoAttribute($val)
    {
        $this->attributes['nombre_archivo'] = trim($val);
        $this->attributes['slug'] = str_slug($val);
    }

    public function getNombreArchivoAttribute()
    {
        return strtoupper($this->attributes['nombre_archivo']);
    }

    public function proyecto()
    {
        return $this->belongsTo('App\Proyecto', 'proyecto_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $carbon = new \Carbon\Carbon();
            $date = $carbon->now();
            
            $model->fecha = \Carbon\Carbon::parse($date)->format('Y-m-d');
        });

        static::updating(function($model)
        {
            // do stuff
        });
    }
}