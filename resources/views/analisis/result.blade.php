@extends('layouts.app', ['title' => 'Hasil Analisis Berat Badan dan Pola Hidup'])
@section('content')
<body class="bg-white">
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('dashboard') }}" class="text-dark" style="font-size: 1rem">Kembali</a>
        </div>
        <div class="d-flex justify-content-center align-items-center py-8">
            <h3 class="font-weight-bold">Hasil Analisis Berat Badan dan Pola Hidup</h3>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="form-group">
            <h6>Tinggi Badan (cm):</h6>
            <p>{{ $data['height'] ?? 'Data tidak tersedia' }}</p>
        </div>
        <div class="form-group">
            <h6>Berat Badan (kg):</h6>
            <p>{{ $data['weight'] ?? 'Data tidak tersedia' }}</p>
        </div>
        <div class="form-group">
            <h6>Jenis Kelamin:</h6>
            <p>{{ $data['gender'] == 1 ? 'Laki-laki' : 'Perempuan' }}</p>
        </div>
        {{-- <div class="form-group">
            <h6>Riwayat Penyakit:</h6>
            <ul>
                @foreach ($data['disease_history'] ?? [] as $diseaseId)
                    @php
                        $disease = \App\Models\DiseaseHistory::find($diseaseId);
                    @endphp
                    <li>{{ $disease->disease }}</li>
                @endforeach
            </ul>
        </div> --}}
        <div class="form-group">
            <h6>Penyakit Saat Ini:</h6>
            <p>{{ $data['disease'] ?? 'Data tidak tersedia' }}</p>
        </div>
        {{-- <div class="form-group">
            <h6>Pola Makan:</h6>
            <ul>
                @foreach ($data['eating_habits'] ?? [] as $habitId)
                    @php
                        $habit = \App\Models\EatingHabit::find($habitId);
                    @endphp
                    <li>{{ $habit->eating_habit }}</li>
                @endforeach
            </ul>
        </div>
        <div class="form-group">
            <h6>Pola Tidur:</h6>
            <ul>
                @foreach ($data['sleep_patterns'] ?? [] as $patternId)
                    @php
                        $pattern = \App\Models\SleepPattern::find($patternId);
                    @endphp
                    <li>{{ $pattern->sleep_pattern }}</li>
                @endforeach
            </ul>
        </div> --}}
    </div>
</body>
@endsection
