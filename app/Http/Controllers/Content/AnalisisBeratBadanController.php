<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

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
            return view('analisis.analisis');
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
            return view('analisis.result');
        }

        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }


    /**
     * Write code for submit analisis
     * 
     * @return response
     */
    public function postAnalisis(Request $request){
        
        return redirect()->intended('result')
        ->withSuccess('Berhasil Menambahkan Data');    }
}
