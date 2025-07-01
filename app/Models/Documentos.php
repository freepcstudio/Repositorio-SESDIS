<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
     /**
     * Nombre de la tabla (opcional si coincide con el plural del modelo).
     */
    protected $table = 'documentos';

    /**
     * Atributos que se pueden asignar masivamente.
     */
    protected $fillable = [
        'titulo',
        'sumilla',
        'fecha',
        'autor',
        'aprobado_por',
        'revisado_por',
        'version',
        'paginas',
        'archivo_pdf',
    ];
    
    /**
     * Casts para convertir automáticamente tipos de datos.
     */
    protected $casts = [
        'fecha'     => 'date',
        'paginas'   => 'integer',
    ];

}
