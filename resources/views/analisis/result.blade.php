@extends('layouts.app', ['title' => 'Hasil Analisis Berat Badan dan Pola Hidup'])

@section('content')
<body class="bg-white">
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('dashboard') }}" class="text-dark" style="font-size: 1rem">Kembali</a>
        </div>

        <div class="d-flex py-8">
            <h3 class="font-weight-bold">Hasil Analisis Berat Badan dan Pola Hidup</h3>
        </div>

        <div class="row mt-3">
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Index Masa Tubuh (BMI)</h4>
                    <h3 class="font-weight-bold" style="font-size: 38px; color: #1E97BFFF">{{ $data['bmi'] }}</h3>
                    <h7 style="font-size: 16px ">Kategori: {{ $data['bmi_category'] }}</h7>
                    <h7 style="font-size: 16px; ">Range {{ $data['bmi_category']}}: {{ $data['range_category'] }}</h7>
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
                    <ul>
                        @php
                            $diseaseHistory = json_decode($data['disease_history'], true); // decode JSON string to array
                        @endphp
                        @if(is_array($diseaseHistory))
                            @foreach($diseaseHistory as $disease)
                                <li> {{ $disease }}</li>
                            @endforeach
                        @else
                            <li>{{ $data['disease_history'] }}</li>
                        @endif
                    </ul>
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
                    <ul>
                        @php
                            $eatRecommendation = json_decode($data['eat_recommendation'], true); // decode JSON string to array
                        @endphp
                        @if(is_array($eatRecommendation))
                            @foreach($eatRecommendation as $recommendation)
                                <li> {{ $recommendation }}</li>
                            @endforeach
                        @else
                            <li>{{ $data['eat_recommendation'] }}</li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <h4 class="font-weight-bold" style="font-size: 20px">Pola Tidur</h4>
                    <ul>
                        @php
                            $sleepRecommendation = json_decode($data['sleep_recommendation'], true); // decode JSON string to array
                        @endphp
                        @if(is_array($sleepRecommendation))
                            @foreach($sleepRecommendation as $recommendation)
                                <li> {{ $recommendation }}</li>
                            @endforeach
                        @else
                            <li>{{ $data['sleep_recommendation'] }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <a href="{{ route('dashboard') }}" class="btn btn-primary w-100">Selesai</a>
        </div>
    </div>
</body>
@endsection
