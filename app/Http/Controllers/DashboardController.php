<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class DashboardController extends Controller
{
    public function dash()
    {
        $tarefa = Tarefa::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('tarefa'));
    }
}
