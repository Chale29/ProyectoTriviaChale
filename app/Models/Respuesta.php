<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Respuesta extends Model
{
    use hasFactory;
    protected $fillable = [
        'idPregunta',
        'descripcionRespuesta',
        'estadoRespuesta'
    ];

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class, 'idpregunta');
    }
}