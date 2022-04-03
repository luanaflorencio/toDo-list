<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\User;

class DashboardController extends Controller
{
    public function dash()
    {
        return view('dashboard');
    }
}
