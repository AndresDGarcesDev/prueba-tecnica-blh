<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pacientes extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'nombres_paciente',
        'apellidos_paciente',
        'fk_tipo_documento',
        'numero_documento',
        'telefono_contacto',
        'email_contacto',
        'fk_estado_paciente',
    ];

    public function tipoDocumento()
    {
        return $this->belongsTo(tipoDocumento::class, 'fk_tipo_documento');
    }

    public function estadoPaciente()
    {
        return $this->belongsTo(EstadoPaciente::class, 'fk_estado_paciente');
    }

    public function broadcastOn($event)
    {
        return [$this];
    }
}
