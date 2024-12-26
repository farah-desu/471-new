<?php
use App\Models\User;
use App\Models\StudyTimeLog;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    // Method to update users' currency
    public function updateCurrency()
    {
        // Get all users
        $users = User::all();

        foreach ($users as $user) {
            // Sum up the time from study logs where user_id matches
            $totalTimeInMinutes = StudyTimeLog::where('user_id', $user->id)
                ->select(DB::raw('SUM(TIMESTAMPDIFF(MINUTE, start_time, end_time)) AS total_time'))
                ->first()->total_time;

            // If there is no time in the study logs, skip updating this user
            if ($totalTimeInMinutes === null) {
                $totalTimeInMinutes = 0;
            }

            // Calculate currency (10 minutes = 5 coins)
            $totalCurrency = floor($totalTimeInMinutes / 10) * 5;

            // Update the user's currency
            $user->currency = $totalCurrency;
            $user->save();
        }

        return response()->json(['message' => 'User currency updated successfully']);
    }
}
