<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\InputDataResource;
use App\Models\SleepPattern;

class SleepPatternController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $sleepPattern = SleepPattern::latest()->paginate(5);

        return new InputDataResource(true, 'Daftar Pola Tidur', $sleepPattern);
    }

    /**
     * Menambahkan data riwayat penyakit
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'sleep_pattern' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $sleepPattern = SleepPattern::create([
            'sleep_pattern' => $request->sleep_pattern,
        ]);

        return new InputDataResource(true, 'Data Pola Tidur Berhasil Ditambahkan!', $sleepPattern);
    }
}
