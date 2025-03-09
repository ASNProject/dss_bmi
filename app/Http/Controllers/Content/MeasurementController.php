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
                $record->eat_recommendation = json_decode($record->eat_recommendation, true) ?? explode("\n", $record->eat_recommendation);
                $record->sleep_recommendation = json_decode($record->sleep_recommendation, true) ?? explode("\n", $record->sleep_recommendation);
            }

            $totalWeightLoss = 0;
            $totalBmiLoss = 0;
            $trend = "Belum ada pembanding";
            $title = "";
    
            if ($bmiRecords->count() > 1) {
                $firstWeight = $bmiRecords->first()->weight;
                $lastWeight = $bmiRecords->last()->weight;
                $totalWeightLoss = $firstWeight - $lastWeight;
    
                $firstBmi = $bmiRecords->first()->bmi;
                $lastBmi = $bmiRecords->last()->bmi;
                $totalBmiLoss = $firstBmi - $lastBmi;
    
                // Menentukan tren
                if ($totalWeightLoss > 0 && $totalBmiLoss > 0) {
                    $trend = "Penururan Berat Badan";
                    $title = "Penurunan";
                } elseif ($totalWeightLoss < 0 && $totalBmiLoss < 0) {
                    $trend = "Peningkatan Berat Badan";
                    $title = "Peningkatan";
                } else {
                    $trend = "Penurunan Berat Badan Konsisten";
                    $title = "Penurunan";
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
            ];
            return view('measurement.measurement', compact('data', 'bmiRecords'));
        }

        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }
}

