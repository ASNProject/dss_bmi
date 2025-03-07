<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\InputDataResource;
use App\Models\EatingHabit;

class EatingHabitController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $eatingHabit = EatingHabit::latest()->paginate(5);

        return new InputDataResource(true, 'Daftar Pola Makan', $eatingHabit);
    }

    /**
     * Menambahkan data riwayat penyakit
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'eating_habit' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $eatingHabit = EatingHabit::create([
            'eating_habit' => $request->eating_habit,
        ]);

        return new InputDataResource(true, 'Data Pola Makan Berhasil Ditambahkan!', $eatingHabit);
    }
}
