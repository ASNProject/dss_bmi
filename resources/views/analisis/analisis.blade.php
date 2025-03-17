@extends('layouts.app', ['title' => 'Analisis Berat Badan dan Pola Hidup'])
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
    <div class="container p- mt-8">
        {{-- <div class="d-flex justify-content-between mb-3">
            <a href="{{ url()->previous() }}" class="text-dark" style="font-size: 1rem" >Kembali</a>
        </div> --}}
        <div class="d-flex justify-content-center align-items-center py-8">
            <h3 class="font-weight-bold">Analisis Berat Badan dan Pola Hidup</h3>
        </div>
        <form action="{{ route('analisis.post')}}" method="POST" class="mt-4 mb-4">
            @csrf

            @session('error')
                <div class="alert alert-danger" role="alert"> 
                    {{ $value }}
                </div>
            @endsession
            <div class="form-group">
                <h6>Tinggi Badan (cm)</h6>
                <input type="number" class="form-control @error('height') is-invalid @enderror" name="height" id="height" placeholder="Masukkan tinggi badan" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                @error('height')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Berat Badan (kg)</h6>
                <input type="number" class="form-control @error('weight') is-invalid @enderror" name="weight" id="weight" placeholder="Masukkan berat badan" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                @error('weight')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Usia</h6>
                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age" placeholder="Masukkan usia" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                @error('age')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Jenis Kelamin</h6>
                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>                
                @error('gender')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Riwayat Penyakit</h6>
                {{-- <select name="disease_history[]" id="disease_history" class="form-control @error('disease_history') is-invalid @enderror">
                    <option value="" disabled selected>Pilih riwayat penyakit yang pernah dialami</option>
                    @foreach ($diseases as $disease)
                        <option value="{{ $disease->id }}">{{ $disease->disease }}</option>
                    @endforeach
                </select>                 --}}
                <textarea class="form-control @error('disease_history') is-invalid @enderror" name="disease_history" id="disease_history" placeholder="Tuliskan riwayat penyakit" rows="4"></textarea>
                @error('disease_history')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            {{-- <div class="form-group" required>
                <h6>Riwayat penyakit yang dipilih:</h6>
                <ul id="selectedDiseasesList"></ul>
            </div> --}}

            <div class="form-group">
                <h6>Penyakit Saat Ini</h6>
                {{-- <textarea class="form-control @error('disease') is-invalid @enderror" name="disease" id="disease" placeholder="Tuliskan kondisi kesehatan saat ini" rows="4" required></textarea> --}}
                <select name="disease" id="disease" class="form-control @error('disease') is-invalid @enderror">
                    <option value="" disabled selected>Pilih riwayat penyakit yang pernah dialami</option>
                    @foreach ($diseases as $disease)
                        <option value="{{ $disease->disease }}">{{ $disease->disease }}</option>
                    @endforeach
                </select>                
                @error('disease')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Pola Makan</h6>
                <select name="eating_habit" id="eating_habit" class="form-control @error('eating_habit') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih Pola Makan</option>
                    @foreach($eatingHabits as $habit)
                        <option value="{{ $habit->eating_habit }}">{{ $habit->eating_habit }}</option>
                    @endforeach
                </select>                
                
                @error('eating_habit')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            {{-- <div class="form-group" required>
                <h6>Pola makan yang dipilih:</h6>
                <ul id="selectedEatingHabitList"></ul>
            </div> --}}

            <div class="form-group">
                <h6>Pola Tidur</h6>
                <select name="sleep_pattern" id="sleep_pattern" class="form-control @error('sleep_pattern') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih Pola Tidur</option>
                    @foreach($sleepPatterns as $pattern)
                        <option value="{{ $pattern->sleep_pattern }}">{{ $pattern->sleep_pattern }}</option>
                    @endforeach
                </select>                
                
                @error('sleep_pattern')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            {{-- <div class="form-group" required>
                <h6>Pola tidur yang dipilih:</h6>
                <ul id="selectedSleepPatternList"></ul>
            </div> --}}

            {{-- <input type="hidden" name="disease_history_input" id="diseaseHistoryInput">
            <input type="hidden" name="eating_habits_input" id="eatingHabitInput">
            <input type="hidden" name="sleep_patterns_input" id="sleepPatternInput"> --}}


            <button type="submit" class="btn btn-primary w-100 text-white font-weight-bold">{{ __('Selesai') }}</button>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector("form");
    
            form.addEventListener("submit", function (event) {
                event.preventDefault(); // Mencegah submit langsung
    
                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Pastikan semua data sudah benar sebelum dikirim.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, submit!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form jika dikonfirmasi
                    }
                });
            });
        });
    </script>    
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
