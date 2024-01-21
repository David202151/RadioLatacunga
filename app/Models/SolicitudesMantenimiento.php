<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudesMantenimiento extends Model
{
    protected $table = 'solicitudes_mantenimiento';

    protected $fillable = [
        'FechaMantenimineto',
        'HoraMantenimineto',
        'AreaMantenimineto',
        'MotivoMantenimineto',
        'ObservacionesMantenimineto',
        'TiempoDuracion',
        'HoraSalida',
        'HoraRegreso',
        'EstadoSolicitud',
        'Parte',
        'Equipo_id',
        'Usuario_id',
        'Mantenimiento_id',
        'Componente_id',
    
    ];
    
    
    protected $dates = [
        'FechaMantenimineto',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/solicitudes-mantenimientos/'.$this->getKey());
    }
}
