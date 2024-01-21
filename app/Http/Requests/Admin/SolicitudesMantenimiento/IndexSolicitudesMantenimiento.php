<?php

namespace App\Http\Requests\Admin\SolicitudesMantenimiento;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexSolicitudesMantenimiento extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.solicitudes-mantenimiento.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,FechaMantenimineto,HoraMantenimineto,AreaMantenimineto,MotivoMantenimineto,ObservacionesMantenimineto,TiempoDuracion,HoraSalida,HoraRegreso,EstadoSolicitud,Equipo_id,Usuario_id,Mantenimiento_id,Componente_id|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}
