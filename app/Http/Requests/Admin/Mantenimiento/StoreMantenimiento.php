<?php

namespace App\Http\Requests\Admin\Mantenimiento;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreMantenimiento extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.mantenimiento.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'Nombre' => ['required', 'string'],
            'Actividad' => ['required', 'string'],
            'Partes' => ['required', 'string'],
            'Frecuencia' => ['required', 'string'],
            'Prioridad' => ['required', 'string'],
            'Responsable' => ['required', 'string'],
            'Procedimiento' => ['required', 'string'],
            'DiasParo' => ['required', 'integer'],
            'Equipo_id' => ['required', 'string'],
            'Descripcion' => ['required', 'string'],
            
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
