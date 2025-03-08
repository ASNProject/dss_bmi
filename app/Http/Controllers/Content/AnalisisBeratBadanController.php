<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\DiseaseHistory;
use App\Models\EatingHabit;
use App\Models\SleepPattern;
use App\Models\EatRecomendation;
use App\Models\SleepRecommendation;
use App\Models\bmiData;

class AnalisisBeratBadanController extends Controller
{
    /**
     * Write code for index
     * 
     * @return response()
     */
    public function index(): View
    {
        if(Auth::check()){
            $diseases = DiseaseHistory::all();
            $eatingHabits = EatingHabit::all();
            $sleepPatterns = SleepPattern::all();

            return view('analisis.analisis', compact('diseases', 'eatingHabits', 'sleepPatterns'));
        }

        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }

    /**
     * Write code for index
     * 
     * @return response()
     */
    public function result(): View
    {
        if(Auth::check()){
            $data = session()->all(); // Get all session data

            return view('analisis.result', compact('data'));
        }

        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }


    /**
     * Write code for submit analisis
     * 
     * @return response
     */
    public function postAnalisis(Request $request){
        $height = $request->input('height');
        $weight = $request->input('weight');

        $heightInMeter = $height/100;
        $bmi = $weight / ($heightInMeter * $heightInMeter);

        $bmiCategory = '';
        $range = '';
        if ($bmi < 18.5) {
            $bmiCategory = 'Underweight';
            $range = '< 18.5';
        } elseif ($bmi >= 8.5 && $bmi < 24.9) {
            $bmiCategory = 'Normal';
            $range = '8.5 - 24.9';
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $bmiCategory = 'Overweight';
            $range = '25 - 29.9';
        } else {
            $bmiCategory = 'Obesity';
            $range = '> 29.9';
        }

        $eatRecommendation = EatRecomendation::where('bmi_category', $bmiCategory)->get();
        $eatRecommendationData = $eatRecommendation->map(function($recommendation) {
            return $recommendation->recommendation;
        });

        $sleepRecommendation = SleepRecommendation::where('bmi_category', $bmiCategory)->get();
        $sleepRecommendationData = $sleepRecommendation->map(function($recommendation) {
            return $recommendation->recommendation;
        });

        $diseaseHistoryIds = $request->input('disease_history_input'); 

        if (!is_array($diseaseHistoryIds)) {
            $diseaseHistoryIds = json_decode($diseaseHistoryIds, true); 
        }

        $diseaseHistoryData = DiseaseHistory::whereIn('id', $diseaseHistoryIds)->get();
        $diseaseHistoryData = $diseaseHistoryData->map(function($disease) {
            return $disease->disease;
        });

        $eatingHabitIds = $request->input('eating_habits_input'); 

        if (!is_array($eatingHabitIds)) {
            $eatingHabitIds = json_decode($eatingHabitIds, true);
        }

        $eatingHabitData = EatingHabit::whereIn('id', $eatingHabitIds)->get();
        $eatingHabitData = $eatingHabitData->map(function($habit) {
            return $habit->eating_habit;
        });

        $sleepPatternIds = $request->input('sleep_patterns_input'); 

        if (!is_array($sleepPatternIds)) {
            $sleepPatternIds = json_decode($sleepPatternIds, true); 
        }

        $sleepPatternData = SleepPattern::whereIn('id', $sleepPatternIds)->get();
        $sleepPatternData = $sleepPatternData->map(function($pattern) {
            return $pattern->sleep_pattern;
        });


        session([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'disease_history' => $diseaseHistoryData->isNotEmpty() ? $diseaseHistoryData : 'Tidak ada riwayat penyakit',
            'disease' => $request->input('disease'),
            'eating_habits' => $eatingHabitData->isNotEmpty() ? $eatingHabitData : 'Tidak ada kebiasaan makan',
            'sleep_patterns' => $sleepPatternData->isNotEmpty() ? $sleepPatternData : 'Tidak ada pola tidur',
            'bmi' => round($bmi, 2),
            'bmi_category' => $bmiCategory,
            'range_category' => $range, 
            'eat_recommendation' => $eatRecommendationData ? $eatRecommendationData : 'Tidak ada rekomendasi',
            'sleep_recommendation' => $sleepRecommendationData ? $sleepRecommendationData : 'Tidak ada rekomendasi',
        ]);

        $bmiData = new bmiData([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'disease_histories' => $diseaseHistoryData->isNotEmpty() ? $diseaseHistoryData : 'Tidak ada riwayat penyakit',
            'disease' => $request->input('disease'),
            'eating_habits' => $eatingHabitData->isNotEmpty() ? $eatingHabitData : 'Tidak ada kebiasaan makan',
            'sleep_patterns' => $sleepPatternData->isNotEmpty() ? $sleepPatternData : 'Tidak ada pola tidur',
            'bmi' => round($bmi, 2),
            'bmi_category' => $bmiCategory,
            'range_category' => $range, 
            'eat_recommendation' => $eatRecommendationData ? $eatRecommendationData : 'Tidak ada rekomendasi',
            'sleep_recommendation' => $sleepRecommendationData ? $sleepRecommendationData : 'Tidak ada rekomendasi',
        ]);

        $bmiData->save();

        //  dd(session()->all());
        // Redirect to the result page
        return redirect()->route('result')->with('success', 'Berhasil Menambahkan Data');
    }
}
