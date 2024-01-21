<?php

namespace App\Http\Requests\Admin\SolicitudesMantenimiento;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateSolicitudesMantenimiento extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.solicitudes-mantenimiento.edit', $this->solicitudesMantenimiento);
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
            'HoraMantenimineto' => ['sometimes', 'date_format:H:i:s'],
            'AreaMantenimineto' => ['sometimes', 'string'],
            'MotivoMantenimineto' => ['sometimes', 'string'],
            'ObservacionesMantenimineto' => ['sometimes', 'string'],
            'TiempoDuracion' => ['sometimes', 'integer'],
            'HoraSalida' => ['sometimes', 'date_format:H:i:s'],
            'HoraRegreso' => ['sometimes', 'date_format:H:i:s'],
            'EstadoSolicitud' => ['sometimes', 'string'],
            'Parte' => ['sometimes', 'string'],
            'Equipo_id' => ['sometimes', 'string'],
            'Usuario_id' => ['sometimes', 'string'],
            'Mantenimiento_id' => ['sometimes', 'string'],
            'Componente_id' => ['sometimes', 'string'],
            
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
