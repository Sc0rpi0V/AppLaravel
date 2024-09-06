<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visit;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function showAnalytics()
    {
        // Nombre d'utilisateurs actifs (connectés durant les dernières 24 heures)
        $activeUsers = User::where('last_login_at', '>=', Carbon::now()->subDay())->count();

        // Nombre total de visiteurs uniques
        $uniqueVisitors = Visit::distinct('ip_address')->count('ip_address');

        // Pages les plus visitées 
        $mostVisitedPages = Visit::select('page', DB::raw('count(*) as visits'))
            ->groupBy('page')
            ->orderBy('visits', 'desc')
            ->limit(5)
            ->get();

        return view('_analytics-admin', compact('activeUsers', 'uniqueVisitors', 'mostVisitedPages'));
    }
}
