<?php

namespace App\Models;

use Illuminate\Database\Eloquent\BroadcastsEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CitasMedicas extends Model
{
    use HasFactory;
    use BroadcastsEvents;
    use Notifiable;

    protected $_guards = [];
    protected $fillable = [
        'fk_pacientes',
        'fk_medicos',
        'horario_cita',
        'asistencia_paciente',
    ];

    public function pacienteCita()
    {
        return $this->belongsTo(Pacientes::class, 'fk_pacientes');
    }

    public function medicoCita()
    {
        return $this->belongsTo(Medicos::class, 'fk_medicos');
    }
}
