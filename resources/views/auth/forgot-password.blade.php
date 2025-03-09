@extends('layouts.app')

@section('content')
<body class="bg-white" style="height: 100vh">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 400px; margin-top: 200px;">
        <div class="w-100" style="max-width: 400px">
            <h4 class="font-weight-bold d-flex justify-content-center">Lupa Password</h4>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="d-flex justify-content-between mt-3">
                <a href="{{route('login')}}" class="text-dark" style="font-size: 0.75rem">{{ __('Login') }}</a>
            </div>
            <form action="{{ route('password.email') }}" method="POST" class="mt-3">
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
                <button type="submit" class="btn btn-warning w-100 text-white font-weight-bold">{{ __('Login') }}</button>
            </form>
        </div>
    </div>
</body>
{{-- <div class="container">
    <h2>Lupa Password</h2>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Kirim Link Reset</button>
    </form>
</div> --}}
@endsection
