<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudyTimeLogsSeeder extends Seeder
{
    public function run()
    {
        $userId = 1; // Replace with an existing user ID
        $startTimes = [
            '2024-12-25 09:00:00',
            '2024-12-25 14:00:00',
            '2024-12-26 08:30:00',
            '2024-12-26 15:15:00',
        ];

        foreach ($startTimes as $startTime) {
            $start = Carbon::parse($startTime);
            $end = $start->copy()->addMinutes(rand(30, 120)); // Random session duration
            $duration = $start->diffInMinutes($end);
            $currency = floor($duration / 10) * 5;

            DB::table('study_time_logs')->insert([
                'user_id' => $userId,
                'start_time' => $start,
                'end_time' => $end,
                'total_duration' => $duration,
                'time_currency_earned' => $currency,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
