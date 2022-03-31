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
        'datafinal',
        'prioridade',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
