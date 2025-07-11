<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class AuthController extends Controller
{
    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function registration(): View
    {
        return view('auth.register');
    }

    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Berhasil Login');
        }

        return redirect("login")->withError('Email atau Password Salah. Periksa Kembali!');
    }

    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = $request->all();
        $user = $this->create($data);

        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Nama atau email sudah digunakan. Silakan gunakan yang lain.');
        }

        Auth::login($user);
        return redirect("dashboard")->with('success', 'Registrasi Berhasil');

    }

    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Maaf! Anda tidak memiliki akses');
    }

    /**
     * Write code on Method
     * 
     * @return response()
     */
    public function create(array $data)
    {
        if (User::where('email', $data['email'])->exists() || User::where('name', $data['name'])->exists()){
            return null;
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Wite code on Method
     * 
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
