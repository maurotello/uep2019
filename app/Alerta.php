<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\Services\DataTable;

class Alerta extends Model
{
    protected $table = 'alertas';
    public $timestamps = true;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'nombre',
        'mensaje',
        'estado',
        'color',
        'provincia_id',
        'codigo',
        'sql_alerta',
        'dias',
        'observaciones',
        'slug'
    ];

    public function setNombreAttribute($val)
    {
        $this->attributes['nombre'] = trim($val);
        $this->attributes['slug'] = str_slug($val) . rand(1,10000);
    }

    public function getNombreAttribute()
    {
        return strtoupper($this->attributes['nombre']);
    }
    public function getMensajeAttribute()
    {
        return strtoupper($this->attributes['mensaje']);
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia', 'provincia_id');
    }

    public function scopeAlertaProv($query)
    {
        return $query->where('provincia_id', Auth::user()->provincia_id);
    }

    public static function boot() {
        parent::boot();

        static::creating(function ($data) {
            return $data['provincia_id'] = Auth::user()->provincia_id;

        });

        static::updating(function($proyecto)
        {
        });

        static::updated(function($proyecto) {
        });


        static::created(function ($model) {
        });
    }
}
