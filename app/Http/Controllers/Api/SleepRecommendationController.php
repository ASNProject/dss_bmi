<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\InputDataResource;
use App\Models\SleepRecommendation;


class SleepRecommendationController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $sleepRecommendation = SleepRecommendation::latest()->paginate(5);

        return new InputDataResource(true, 'Daftar Rekomendasi Pola Tidur', $sleepRecommendation);
    }

    /**
     * Menambahkan data riwayat penyakit
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'bmi_category' => 'required',
            'recommendation' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $sleepRecommendation = SleepRecommendation::create([
            'bmi_category' => $request->bmi_category,
            'recommendation' => $request->recommendation,
        ]);

        return new InputDataResource(true, 'Data Rekomendasi Pola Tidur Berhasil Ditambahkan!', $sleepRecommendation);
    }
}
