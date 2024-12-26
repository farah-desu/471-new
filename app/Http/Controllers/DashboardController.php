<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Query to group study logs by date and calculate total duration
        $dailyLogs = DB::table('study_time_logs')
            ->select(DB::raw('DATE(start_time) as study_date'), DB::raw('SUM(total_duration) as total_minutes'))
            ->groupBy('study_date')
            ->get();

        // Transform data for JavaScript compatibility
        $formattedLogs = [];
        foreach ($dailyLogs as $log) {
            $date = Carbon::parse($log->study_date);
            $monthKey = $date->format('Y-m');
            $day = $date->format('j');

            if (!isset($formattedLogs[$monthKey])) {
                $formattedLogs[$monthKey] = [];
            }
            $formattedLogs[$monthKey][$day] = round($log->total_minutes / 60, 2); // Convert to hours
        }

        $studyData = [
            "2024-12" => [
                "30" => 2,
            ],
            "2025-01" => [
                "15" => 7,
                "20" => 5,
                "30" => 9,
            ],
        ];

        // Pass data to the view as JSON
        return view('dashboard', ['studyData' => json_encode($formattedLogs)]);
        

    }
}
