<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'nome',
        'user_id'
    ];
    public function tarefa()
    {
        return $this->hasMany('App\Models\Tarefa', 'foreign_key', 'user_id');
    }
}
