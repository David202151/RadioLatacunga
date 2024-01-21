<?php

namespace App\Http\Requests\Admin\Equipo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreEquipo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.equipo.create');
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
            'Procesador' => ['required', 'string'],
            'Marca' => ['required', 'string'],
            'TargetaGrafica' => ['required', 'string'],
            'Modelo' => ['required', 'string'],
            'Antivirus' => ['required', 'string'],
            'SO' => ['required', 'string'],
            'EspacioDisco' => ['required', 'string'],
            'MemoriaRAM' => ['required', 'string'],
            'Area' => ['required', 'string'],
            'Estado' => ['required', 'boolean'],
            'FechaAdquirido' => ['nullable', 'date'],
            'AñoEquipo' => ['nullable', 'date'],
            'Prioridad' => ['required', 'string'],
            
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
