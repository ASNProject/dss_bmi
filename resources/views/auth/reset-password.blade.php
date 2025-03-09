@extends('layouts.app')

@section('content')
<body class="bg-white" style="height: 100vh;">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%; width: 400px; margin-top: 200px;">
        <div class="w-100" style="max-width: 400px">
            <h4 class="font-weight-bold d-flex justify-content-center">Reset Password</h4>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-warning w-100 text-white font-weight-bold">{{ __('Reset Password') }}</button>
            </form>
        </div>
    </div>
</body>
{{-- <div class="container">
    <h2>Reset Password</h2>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password Baru</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Reset Password</button>
    </form>
</div> --}}
@endsection
