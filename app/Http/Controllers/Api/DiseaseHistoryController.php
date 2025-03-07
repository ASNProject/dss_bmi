<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\InputDataResource;
use App\Models\DiseaseHistory;

class DiseaseHistoryController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $diseases = DiseaseHistory::latest()->paginate(5);

        return new InputDataResource(true, 'Daftar Riwayat Pengakit', $diseases);
    }

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

        $disease = DiseaseHistory::create([
            'disease' => $request->disease,
        ]);

        return new InputDataResource(true, 'Data Riwayat Penyakit Berhasil Ditambahkan!', $disease);
    }
}
