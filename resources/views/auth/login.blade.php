@extends('layouts.app', ['title' => 'Login'])

@section('content')
<body class="bg-white" style="height: 100vh;">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 400px; margin-top: 200px;">
        <div class="w-100" style="max-width: 400px">
            <h4 class="font-weight-bold d-flex justify-content-center">Kalkulator Berat Badan Ideal</h4>
            <div class="d-flex justify-content-between mt-3">
                <a href="{{route('register')}}" class="text-dark" style="font-size: 1rem">{{ __('Register') }}</a>
                <a href="{{ route('password.request') }}" class="text-dark" style="font-size: 1rem">{{ __('Forgot Password?') }}</a>
            </div>
            <form action="{{ route('login.post') }}" method="POST" class="mt-3">
                @csrf

                @session('error')
                    <div class="alert alert-danger" role="alert"> 
                        {{ $value }}
                    </div>
                @endsession

                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required>
                    @error('email')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>    
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" placeholder="Password" required>
                    @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>    
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning w-100 text-white font-weight-bold">{{ __('Login') }}</button>
            </form>
        </div>
    </div>
</body>
@endsection