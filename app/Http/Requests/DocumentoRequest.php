<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentoRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Ajusta la lógica de permisos aquí (Gate/Policy).  
        return true;
    }

    public function rules(): array
    {
        // Cuando edites, $this->documento es el modelo inyectado por route‑model‑binding
        $isUpdate = $this->method() !== 'POST';

        return [
            'titulo'        => 'required|string|max:255',
            'sumilla'       => 'nullable|string|max:1000',
            'fecha'         => 'required|date',
            'autor'         => 'nullable|string|max:255',
            'aprobado_por'  => 'nullable|string|max:255',
            'revisado_por'  => 'nullable|string|max:255',
            'version'       => 'required|string|max:20',
            'paginas'       => 'required|integer|min:1',
            // En update el PDF puede ser opcional
            'archivo_pdf'   => ($isUpdate ? 'nullable' : 'required') . '|file|mimes:pdf|max:20480',
        ];
    }

    public function messages(): array
    {
        return [
            'archivo_pdf.required' => 'Debes subir el archivo PDF.',
            'archivo_pdf.mimes'    => 'El archivo debe ser un PDF.',
        ];
    }
}
