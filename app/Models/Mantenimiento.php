<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $table = 'mantenimiento';

    protected $fillable = [
        'Nombre',
        'Actividad',
        'Partes',
        'Frecuencia',
        'Prioridad',
        'Responsable',
        'Procedimiento',
        'DiasParo',
        'Equipo_id',
        'Descripcion',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/mantenimientos/'.$this->getKey());
    }
}
