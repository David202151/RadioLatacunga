<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'Nombre',
        'Procesador',
        'Marca',
        'TargetaGrafica',
        'Modelo',
        'Antivirus',
        'SO',
        'EspacioDisco',
        'MemoriaRAM',
        'Area',
        'Estado',
        'FechaAdquirido',
        'AñoEquipo',
        'Prioridad',
    
    ];
    
    
    protected $dates = [
        'FechaAdquirido',
        'AñoEquipo',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/equipos/'.$this->getKey());
    }
}
