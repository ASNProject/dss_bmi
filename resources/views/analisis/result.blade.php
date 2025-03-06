@extends('layouts.app', ['title' => 'Hasil Analisis Berat Badan dan Pola Hidup'])
@section('content')
<body class="bg-white">
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{route('dashboard')}}" class="text-dark" style="font-size: 1rem" >Kembali</a>
            {{-- <a href="{{ route('logout') }}" class="text-dark" style="font-size: 0.75rem" >Logout</a> --}}
        </div>
        <div class="d-flex justify-content-center align-items-center py-8">
            <h3 class="font-weight-bold">Hasil Analisis Berat Badan dan Pola Hidup</h3>
        </div>
        
    </div>    
</body>
    
@endsection