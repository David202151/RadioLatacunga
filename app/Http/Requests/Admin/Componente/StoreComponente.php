<?php

namespace App\Http\Requests\Admin\Componente;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreComponente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.componente.create');
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
            'Marca' => ['required', 'string'],
            'Area' => ['required', 'string'],
            'NumeroSerie' => ['required', 'string'],
            'FechaAdquirido' => ['nullable', 'date'],
            'AñoComponente' => ['nullable', 'date'],
            'Prioridad' => ['required', 'string'],
            'Estado' => ['required', 'string'],
            'Equipo_id' => ['required', 'string'],
            
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
