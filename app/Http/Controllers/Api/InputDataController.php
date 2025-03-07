<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiseaseHistory;
use App\Models\EatingHabit;
use App\Models\SleepPattern;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\InputDataResource;


class InputDataController extends Controller
{
    /**
     * Menambahkan data riwayat penyakit
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'disease' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = DiseaseHistory::create([
            'disease' => $request->disease,
        ]);

        return new InputDataResource(true, 'Data Riwayat Penyakit Berhasil Ditambahkan!', $post);
    }

    /**
     * Menambahkan data pola makan
     */
    public function addEatingHabit(Request $request)
    {
        $validated = $request->validate([
            'eating_habit' => 'required|string|max:255',
        ]);

        $eatingHabit = EatingHabit::create([
            'eating_habit' => $validated['eating_habit'],
        ]);

        return response()->json([
            'message' => 'Data pola makan berhasil ditambahkan!',
            'data' => $eatingHabit,
        ]);
    }

    /**
     * Menambahkan data pola tidur
     */
    public function addSleepPattern(Request $request)
    {
        $validated = $request->validate([
            'sleep_pattern' => 'required|string|max:255',
        ]);

        $sleepPattern = SleepPattern::create([
            'sleep_pattern' => $validated['sleep_pattern'],
        ]);

        return response()->json([
            'message' => 'Data pola tidur berhasil ditambahkan!',
            'data' => $sleepPattern,
        ]);
    }
}
