<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\bmiData;


class MeasurementController extends Controller
{
    /**
     * Write code for index
     * 
     * @return response()
     */
    public function index(): View
    {
        if (Auth::check()){
            $userName = Auth::user()->name;

            $bmiRecords = bmiData::where('user_name', $userName)->orderBy('created_at', 'desc')->get();
            foreach ($bmiRecords as $record) {
                $record->physical_activity = json_decode($record->physical_activity, true) ?? explode("\n", $record->physical_activity);
                $record->activity_pattern = json_decode($record->activity_pattern, true) ?? explode("\n", $record->activity_pattern);
                $record->eat_recommendation = json_decode($record->eat_recommendation, true) ?? explode("\n", $record->eat_recommendation);
                $record->eat_pattern = json_decode($record->eat_pattern, true) ?? explode("\n", $record->eat_pattern);
                $record->food_restriction = json_decode($record->food_restriction, true) ?? explode("\n", $record->food_restriction);
                $record->sleep_recommendation = json_decode($record->sleep_recommendation, true) ?? explode("\n", $record->sleep_recommendation);
            }

            $totalWeightLoss = 0;
            $totalBmiLoss = 0;
            $trend = "Belum ada pembanding";
            $title = "";
    
            if ($bmiRecords->count() > 1) {
                $firstWeight = $bmiRecords->first()->weight;
                $lastWeight = $bmiRecords->skip(1)->first()->weight;
                $totalWeightLoss = $firstWeight - $lastWeight;

   
                $firstBmi = $bmiRecords->first()->bmi;
                $lastBmi = $bmiRecords->skip(1)->first()->bmi;
                $totalBmiLoss = $firstBmi - $lastBmi;
    
                if ($firstWeight > $lastWeight && $firstBmi > $lastBmi) {
                    $trend = "Peningkatan Berat Badan";
                    $title = "Peningkatan";
                } elseif ($firstWeight < $lastWeight && $firstBmi < $lastBmi) {
                    $trend = "Penurunan Berat Badan";
                    $title = "Penurunan";
                } elseif ($firstWeight > $lastWeight && $firstBmi < $lastBmi) {
                    $trend = "Peningkatan Berat Badan Tidak Konsisten";
                    $title = "Peningkatan";
                } elseif ($firstWeight < $lastWeight && $firstBmi > $lastBmi) {
                    $trend = "Penurunan Berat Badan Tidak Konsisten";
                    $title = "Penurunan";
                } else {
                    $trend = "Tidak Ada Tren Jelas";
                    $title = "Tidak Jelas";
                }
            }

            $data = [
                'dates' => $bmiRecords->pluck('created_at')->map(fn($date) => $date->format('Y-m-d'))->toArray(),
                'bmi' => $bmiRecords->pluck('bmi')->toArray(),
                'weight' => $bmiRecords->pluck('weight')->toArray(),
                'totalWeightLoss' => $totalWeightLoss,
                'totalBmiLoss' => $totalBmiLoss,
                'trend' => $trend,
                'title' => $title,
                'pysical_activity' => $bmiRecords->pluck('physical_activity')->first(),
                'activity_pattern' => $bmiRecords->pluck('activity_pattern')->first(),
                'eat_recommendation' => $bmiRecords->pluck('eat_recommendation')->first(),
                'eat_patterns' => $bmiRecords->pluck('eat_pattern')->first(),
                'food_restriction' => $bmiRecords->pluck('food_restriction')->first(),
                'sleep_recommendation' => $bmiRecords->pluck('sleep_recommendation')->first(),
                'calorie' => $bmiRecords->pluck('calorie')->first(),
            ];
            return view('measurement.measurement', compact('data', 'bmiRecords'));
        }

        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }
}

