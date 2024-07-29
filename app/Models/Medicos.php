<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Medicos extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'nombre_medico',
        'apellido_medico',
        'fk_tipo_documento',
        'numero_documento',
        'telefono_medico',
        'correo_medico',
        'fk_especialidad_medico',
    ];

    public function tipoDocumento()
    {
        return $this->belongsTo(tipoDocumento::class, 'fk_tipo_documento');
    }

    public function especialidadMedico()
    {
        return $this->belongsTo(EspecialidadMedico::class, 'fk_especialidad_medico');
    }
}
