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
        
        // Validation
        $validatedData = $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'gender' => 'required|in:1,2',
            'disease_history' => 'required|array',
            'disease' => 'required|string',
            'eating_habits' => 'required|array',
            'sleep_patterns' => 'required|array',
        ]);

        // Store the data in the session to be used in the result page
        session([
            'height' => $request->height,
            'weight' => $request->weight,
            'gender' => $request->gender,
            'disease_history' => $request->disease_history,
            'disease' => $request->disease,
            'eating_habits' => $request->eating_habits,
            'sleep_patterns' => $request->sleep_patterns,
        ]);

        // Redirect to the result page
        return redirect()->route('result')->with('success', 'Berhasil Menambahkan Data');
    }
}
