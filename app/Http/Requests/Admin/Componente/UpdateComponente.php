<?php

namespace App\Http\Requests\Admin\Componente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateComponente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.componente.edit', $this->componente);
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
            'Marca' => ['sometimes', 'string'],
            'Area' => ['sometimes', 'string'],
            'NumeroSerie' => ['sometimes', 'string'],
            'FechaAdquirido' => ['nullable', 'date'],
            'AñoComponente' => ['nullable', 'date'],
            'Prioridad' => ['sometimes', 'string'],
            'Estado' => ['sometimes', 'string'],
            'Equipo_id' => ['sometimes', 'string'],
            
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
