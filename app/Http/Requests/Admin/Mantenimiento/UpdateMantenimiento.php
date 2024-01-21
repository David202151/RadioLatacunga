<?php

namespace App\Http\Requests\Admin\Mantenimiento;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMantenimiento extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.mantenimiento.edit', $this->mantenimiento);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'Nombre' => ['sometimes', 'string'],
            'Actividad' => ['sometimes', 'string'],
            'Partes' => ['sometimes', 'string'],
            'Frecuencia' => ['sometimes', 'string'],
            'Prioridad' => ['sometimes', 'string'],
            'Responsable' => ['sometimes', 'string'],
            'Procedimiento' => ['sometimes', 'string'],
            'DiasParo' => ['sometimes', 'integer'],
            'Equipo_id' => ['sometimes', 'string'],
            'Descripcion' => ['sometimes', 'string'],
            
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
