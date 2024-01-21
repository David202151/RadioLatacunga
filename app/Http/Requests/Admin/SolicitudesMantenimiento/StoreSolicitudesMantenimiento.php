<?php

namespace App\Http\Requests\Admin\SolicitudesMantenimiento;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreSolicitudesMantenimiento extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.solicitudes-mantenimiento.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'FechaMantenimineto' => ['nullable', 'date'],
            'HoraMantenimineto' => ['required', 'date_format:H:i:s'],
            'AreaMantenimineto' => ['required', 'string'],
            'MotivoMantenimineto' => ['required', 'string'],
            'ObservacionesMantenimineto' => ['required', 'string'],
            'TiempoDuracion' => ['required', 'integer'],
            'HoraSalida' => ['required', 'date_format:H:i:s'],
            'HoraRegreso' => ['required', 'date_format:H:i:s'],
            'EstadoSolicitud' => ['required', 'string'],
            'Parte' => ['required', 'string'],
            'Equipo_id' => ['required', 'string'],
            'Usuario_id' => ['required', 'string'],
            'Mantenimiento_id' => ['required', 'string'],
            'Componente_id' => ['required', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
