<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\User;

class DashboardController extends Controller
{
    public function dash()
    {
        $tarefa = Tarefa::orderBy('tarefas.created_at', 'desc')->get();
        return view('dashboard', compact('tarefa'));
    }
}
