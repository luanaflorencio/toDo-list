<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'finalizada',
        'datafinal',
        'prioridade',
        'user_id'
    ];
    public function membro()
    {
        return $this->belongsTo('App\Models\Membro', 'user_id', 'id');
    }
}
