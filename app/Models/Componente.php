<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
    protected $fillable = [
        'Nombre',
        'Marca',
        'Area',
        'NumeroSerie',
        'FechaAdquirido',
        'AñoComponente',
        'Prioridad',
        'Estado',
        'Equipo_id',
    
    ];
    
    
    protected $dates = [
        'FechaAdquirido',
        'AñoComponente',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/componentes/'.$this->getKey());
    }
}
