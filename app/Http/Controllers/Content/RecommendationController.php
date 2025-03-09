<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\bmiData;

class RecommendationController extends Controller
{
    /**
     * Menampilkan rekomendasi pola kegiatan harian.
     *
     * @param  Request  $request
     * @return response()
     */
    public function index(Request $request): View
    {
        if (Auth::check()) {
            // Ambil seluruh ID dan tanggal yang ada untuk pengguna yang sedang login
            $bmiRecords = bmiData::where('user_name', Auth::user()->name)
                                 ->select('id', 'created_at')
                                 ->get();
    
            // Menyaring data berdasarkan ID yang dipilih
            if ($request->has('id_filter') && $request->id_filter != '') {
                $bmiData = bmiData::where('user_name', Auth::user()->name)
                                  ->where('id', $request->id_filter)
                                  ->first();
            } else {
                // Jika tidak ada filter yang dipilih, tampilkan data terakhir
                $bmiData = bmiData::where('user_name', Auth::user()->name)->latest()->first();
            }
    
            // if (!$bmiData) {
            //     return redirect()->route('dashboard')->with('error', 'Data BMI tidak ditemukan.');
            // }
    
            return view('recommendation.recommendation', [
                'bmiData' => $bmiData,
                'bmiRecords' => $bmiRecords
            ]);
        }
    
        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }
    
}
