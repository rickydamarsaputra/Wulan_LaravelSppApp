<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $responseGlobal = Http::get('https://covid19.mathdro.id/api')->json();
        $responseLocal = Http::get('https://indonesia-covid-19.mathdro.id/api/provinsi')->json()['data'];
        // return $responseLocal;
        return view('dashboard.dashboard', [
            'users' => $users,
            'coronaGlobal' => $responseGlobal,
            'coronaLocal' => $responseLocal
        ]);
    }
}
