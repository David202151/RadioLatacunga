<?php

namespace App\Http\Requests\Admin\Equipo;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateEquipo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.equipo.edit', $this->equipo);
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
            'Procesador' => ['sometimes', 'string'],
            'Marca' => ['sometimes', 'string'],
            'TargetaGrafica' => ['sometimes', 'string'],
            'Modelo' => ['sometimes', 'string'],
            'Antivirus' => ['sometimes', 'string'],
            'SO' => ['sometimes', 'string'],
            'EspacioDisco' => ['sometimes', 'string'],
            'MemoriaRAM' => ['sometimes', 'string'],
            'Area' => ['sometimes', 'string'],
            'Estado' => ['sometimes', 'boolean'],
            'FechaAdquirido' => ['nullable', 'date'],
            'AñoEquipo' => ['nullable', 'date'],
            'Prioridad' => ['sometimes', 'string'],
            
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
