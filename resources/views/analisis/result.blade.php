@extends('layouts.app', ['title' => 'Hasil Analisis Berat Badan dan Pola Hidup'])

@section('content')
<head>
    <style>
        .navbar {
            width: 100%;
            background-color: #007bff;
            padding: 15px 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 22px;
        }
        .navbar-nav {
            margin: auto;
        }
        .logout-link {
            margin-left: auto;
            margin-right: 20px;
        }
        .container {
            max-width: 100%;
            margin-top: 80px;
        }
    </style>
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-size: 28px; color: white">Analisis Kesehatan</a>
                <p class="" style="margin-top: -10px; color: white; font-size: 12px;">Laporkan berat badan dan pola hidup Anda</p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link font-weight-bold" style="font-size: 18px; color: white" href="{{ route('analisis') }}">Analisis Berat Badan</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" style="font-size: 18px; color: white" href="{{ route('measurement') }}">Monitoring Pola Hidup</a></li>
                    <li class="nav-item"><a class="nav-link font-weight-bold" style="font-size: 18px; color: white" href="{{ route('recommendation') }}">Rekomendasi Kegiatan</a></li>
                </ul>
                <ul class="navbar-nav logout-link font-weight-bold">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-3 mt-8">
        {{-- <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('dashboard') }}" class="text-dark" style="font-size: 1rem">Kembali</a>
        </div> --}}

        <div class="d-flex justify-content-center align-items-center py-8">
            <h3 class="font-weight-bold">Hasil Analisis Berat Badan dan Pola Hidup</h3>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Index Masa Tubuh (BMI)</h4>
                    <h3 class="font-weight-bold" style="font-size: 38px; color: #1E97BFFF">{{ $data['bmi'] }}</h3>
                    <h7 style="font-size: 16px ">Kategori: {{ $data['bmi_category'] }}</h7>
                    <h7 style="font-size: 16px; ">Kalori Harian: {{ $data['calorie']}} kkal</h7>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Data Pengguna</h4>
                    <h7 style="font-size: 16px ">Tinggi: {{ $data['height'] }} cm</h7>
                    <h7 style="font-size: 16px; ">Berat: {{ $data['weight'] }} kg</h7>
                    <h7 style="font-size: 16px; ">Usia: {{ $data['age'] }} tahun</h7>
                    <h7 style="font-size: 16px; ">Jenis Kelamin: {{ $data['gender'] }}</h7>
                </div>
            </div>
        </div>
        <h4 class="font-weight-bold">Riwayat Kesehatan</h4>
        <div class="row mt-3">
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Riwayat Penyakit</h4>
                    <div>
                        @php
                            $diseaseHistory = json_decode($data['disease_histories'], true); // decode JSON string to array
                        @endphp
                        @if(is_array($diseaseHistory))
                            @foreach($diseaseHistory as $disease)
                                <div>{{ $disease }}</div>
                            @endforeach
                        @else
                            <div>{{ $data['disease_histories'] }}</div>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Penyakit Saat Ini</h4>
                    <h7 style="font-size: 16px; ">{{ $data['disease'] }}</h7>
                </div>
            </div>
        </div>
        <h4 class="font-weight-bold">Pola Hidup</h4>
        <div class="row mt-3">
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Pola Makan</h4>
                    <div>
                        @php
                            $eatingHabit = json_decode($data['eating_habits'], true); // decode JSON string to array
                            // Convert \n into <br> for HTML line breaks
                            $eatingHabit = nl2br($eatingHabit);
                        @endphp
                        @if(is_array($eatingHabit))
                            @foreach($eatingHabit as $recommendation)
                                <div>{{ $recommendation }}</div>
                            @endforeach
                        @else
                            <div>{!! nl2br(e($data['eating_habits'])) !!}</div>
                        @endif
                    </div>
                </div>
            </div>       
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Pola Tidur</h4>
                    @php
                        $sleepRecommendation = json_decode($data['sleep_patterns'], true); // decode JSON string to array
                        $sleepRecommendation = nl2br( $sleepRecommendation);
                    @endphp
                    @if(is_array($sleepRecommendation))
                        @foreach($sleepRecommendation as $recommendation)
                            <div> {{ $recommendation }}</div>
                        @endforeach
                    @else
                        <div>{{ nl2br(e($data['sleep_patterns']))}}</div>
                    @endif
                
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <a href="{{ route('dashboard') }}" class="btn btn-primary w-100">Selesai</a>
        </div>
    </div>
</body>
@endsection
