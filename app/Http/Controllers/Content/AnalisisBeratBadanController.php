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
use App\Models\ActivityData;
use App\Models\FoodRestrictions;
use App\Models\ActivityPattern;
use App\Models\EatPattern;


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
        if (Auth::check()){
            $height = $request->input('height');
            $weight = $request->input('weight');
    
            $heightInMeter = $height/100;
            $bmi = $weight / ($heightInMeter * $heightInMeter);
    
            $bmiCategory = '';
            $range = '';
            if ($bmi < 18.5) {
                $bmiCategory = 'Underweight';
                $range = '< 18.5';
            } elseif ($bmi >= 8.5 && $bmi < 22.9) {
                $bmiCategory = 'Normal';
                $range = '8.5 - 22.9';
            } elseif ($bmi >= 23 && $bmi < 24.9) {
                $bmiCategory = 'Overweight';
                $range = '23 - 24.9';
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                $bmiCategory = 'Obesity';
                $range = '25 - 29.9';
            } else {
                $bmiCategory = 'Obesity2';
                $range = '> 30';
            }

            $bmr = '';
            $gender = $request->input('gender');
            $age = $request->input('age');
            if ($gender == 'Laki-laki' && $bmi < 18.5){
                $bmr = ((66.5 + (13.7*$weight) + (5*$height) - (6.8*$age))*1.3) + 500;
            } else if ($gender == 'Perempuan' && $bmi < 18.5) {
                $bmr = ((655 + (9.6*$weight) + (1.8*$height) - (4.7*$age))*1.3) + 400;
            } else if ($gender == 'Laki-laki' && ($bmi >= 8.5 && $bmi < 22.9)) {
                $bmr = ((65.5 + (13.7*$weight) + (5*$height) - (6.8*$age))*1.3);
            } else if ($gender == 'Perempuan' && ($bmi >= 8.5 && $bmi < 22.9)) {
                $bmr = ((655 + (9.6*$weight) + (1.8*$height) - (4.7*$age))*1.3);
            } else if ($gender == 'Laki-laki' && ($bmi >= 23 && $bmi < 24.9)) {
                $bmr = ((65.5 + (13.7*$weight) + (5*$height) - (6.8*$age))*1.3)-550;
            } else if ($gender == 'Perempuan' && ($bmi >= 23 && $bmi < 24.9)) {
                $bmr = ((655 + (9.6*$weight) + (1.8*$height) - (4.7*$age))*1.3)-450;
            } else if ($gender == 'Laki-laki' && ($bmi >= 25 && $bmi < 29.9)) {
                $bmr = ((65.5 + (13.7*$weight) + (5*$height) - (6.8*$age))*1.3)-800;
            } else if ($gender == 'Perempuan' && ($bmi >= 25 && $bmi < 29.9)) {
                $bmr = ((655 + (9.6*$weight) + (1.8*$height) - (4.7*$age))*1.3)-700;
            } else if ($gender == 'Laki-laki' && ($bmi >= 30)) {
                $bmr = ((65.5 + (13.7*$weight) + (5*$height) - (6.8*$age))*1.3)-1200;
            } else if ($gender == 'Perempuan' && ($bmi >= 30)) {
                $bmr = ((655 + (9.6*$weight) + (1.8*$height) - (4.7*$age))*1.3)-1000;
            }
       
            // $eatRecommendation = EatRecomendation::where('bmi_category', $bmiCategory)->get();
            // $eatRecommendationData = $eatRecommendation->map(function($recommendation) {
            //     return $recommendation->recommendation;
            // });

            $eatRecommendationData = EatRecomendation::where('bmi_category', $bmiCategory)
                ->pluck('recommendation')->first();

            $sleepRecommendation = '';
            if ($age <= 40){
                $sleepRecommendation = 'Waktu Tidur 7 sampai 8 Jam';
            } else {
                $sleepRecommendation = 'Waktu Tidur 6 sampai 8 Jam';
            }
    
            // $sleepRecommendation = SleepRecommendation::where('bmi_category', $bmiCategory)->get();
            // $sleepRecommendationData = $sleepRecommendation->map(function($recommendation) {
            //     return $recommendation->recommendation;
            // });

            $physicalRecommendationData = ActivityData::where('bmi_category', $bmiCategory)
            ->pluck('recommendation')
            ->first();

            $disease = $request->input('disease');
            $foodRestrictionRecommendations = FoodRestrictions::where('disease', $disease)
            ->pluck('recommendation')
            ->first();
            
            $activityPatternRecommendations = ActivityPattern::where('disease', $disease)
            ->pluck('activity')
            ->first();

            $eatPatternRecommendation = EatPattern::where('bmi_category', $bmiCategory)
            ->pluck('recommendation')
            ->first();
    
            // $diseaseHistoryIds = $request->input('disease_history_input'); 
    
            // if (!is_array($diseaseHistoryIds)) {
            //     $diseaseHistoryIds = json_decode($diseaseHistoryIds, true); 
            // }
    
            // $diseaseHistoryData = DiseaseHistory::whereIn('id', $diseaseHistoryIds)->get();
            // $diseaseHistoryData = $diseaseHistoryData->map(function($disease) {
            //     return $disease->disease;
            // });
    
            // $eatingHabitIds = $request->input('eating_habits_input'); 
    
            // if (!is_array($eatingHabitIds)) {
            //     $eatingHabitIds = json_decode($eatingHabitIds, true);
            // }
    
            // $eatingHabitData = EatingHabit::whereIn('id', $eatingHabitIds)->get();
            // $eatingHabitData = $eatingHabitData->map(function($habit) {
            //     return $habit->eating_habit;
            // });
    
            // $sleepPatternIds = $request->input('sleep_patterns_input'); 
    
            // if (!is_array($sleepPatternIds)) {
            //     $sleepPatternIds = json_decode($sleepPatternIds, true); 
            // }
    
            // $sleepPatternData = SleepPattern::whereIn('id', $sleepPatternIds)->get();
            // $sleepPatternData = $sleepPatternData->map(function($pattern) {
            //     return $pattern->sleep_pattern;
            // });
    
    
            session([
                'user_id' => Auth::user()->id,
                'user_name' => Auth::user()->name,
                'height' => $request->input('height'),
                'weight' => $request->input('weight'),
                'age' => $request->input('age'),
                'gender' => $request->input('gender'),
                // 'disease_history' => $diseaseHistoryData->isNotEmpty() ? $diseaseHistoryData : 'Tidak ada riwayat penyakit',
                'disease_histories' => $request->input('disease_history'),
                'disease' => $request->input('disease'),
                // 'eating_habits' => $eatingHabitData->isNotEmpty() ? $eatingHabitData : 'Tidak ada kebiasaan makan',
                'eating_habits' => $request->input('eating_habit'),
                // 'sleep_patterns' => $sleepPatternData->isNotEmpty() ? $sleepPatternData : 'Tidak ada pola tidur',
                'sleep_patterns' => $request->input('sleep_pattern'),
                'bmi' => round($bmi, 2),
                'bmi_category' => $bmiCategory,
                'range_category' => $range,
                'calorie' => $bmr, 
                'eat_recommendation' => $eatRecommendationData ? $eatRecommendationData : 'Tidak ada rekomendasi',
                'sleep_recommendation' => $sleepRecommendation,
                'physical_activity' => $physicalRecommendationData ? $physicalRecommendationData : 'Tidak ada rekomendasi',
                'food_restriction' => $foodRestrictionRecommendations ? $foodRestrictionRecommendations : 'Tidak ada rekomendasi',
                'activity_pattern' => $activityPatternRecommendations ? $activityPatternRecommendations : 'Tidak  ada rekomendasi',
                'eat_pattern' =>  $eatPatternRecommendation ?  $eatPatternRecommendation : 'Tidak ada rekomendasi',
            ]);
    
            $bmiData = new bmiData([
                'user_id' => Auth::user()->id,
                'user_name' => Auth::user()->name,
                'height' => $request->input('height'),
                'weight' => $request->input('weight'),
                'age' => $request->input('age'),
                'gender' => $request->input('gender'),
                'disease_histories' => $request->input('disease_history'),
                'disease' => $request->input('disease'),
                'eating_habits' => $request->input('eating_habit'),
                'sleep_patterns' => $request->input('sleep_pattern'),
                'bmi' => round($bmi, 2),
                'bmi_category' => $bmiCategory,
                'range_category' => $range,
                'calorie' => $bmr, 
                'eat_recommendation' => $eatRecommendationData ? $eatRecommendationData : 'Tidak ada rekomendasi',
                'sleep_recommendation' => $sleepRecommendation,
                'physical_activity' => $physicalRecommendationData ? $physicalRecommendationData : 'Tidak ada rekomendasi',
                'food_restriction' => $foodRestrictionRecommendations ? $foodRestrictionRecommendations : 'Tidak ada rekomendasi',
                'activity_pattern' => $activityPatternRecommendations ? $activityPatternRecommendations : 'Tidak  ada rekomendasi',
                'eat_pattern' =>  $eatPatternRecommendation ?  $eatPatternRecommendation : 'Tidak ada rekomendasi',
            ]);
    
            $bmiData->save();

            // // Redirect to the result page
            return redirect()->route('result')->with('success', 'Berhasil Menambahkan Data');
        }
        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }
}
