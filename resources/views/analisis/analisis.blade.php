@extends('layouts.app', ['title' => 'Analisis Berat Badan dan Pola Hidup'])
@section('content')
<body class="bg-white">
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ url()->previous() }}" class="text-dark" style="font-size: 1rem" >Kembali</a>
            {{-- <a href="{{ route('logout') }}" class="text-dark" style="font-size: 0.75rem" >Logout</a> --}}
        </div>
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
                <select name="disease_history[]" id="disease_history" class="form-control @error('disease_history') is-invalid @enderror">
                    <option value="" disabled selected>Pilih riwayat penyakit yang pernah dialami</option>
                    @foreach ($diseases as $disease)
                        <option value="{{ $disease->id }}">{{ $disease->disease }}</option>
                    @endforeach
                </select>                
                @error('disease_history')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            <div class="form-group" required>
                <h6>Riwayat penyakit yang dipilih:</h6>
                <ul id="selectedDiseasesList"></ul>
            </div>

            <div class="form-group">
                <h6>Penyakit Saat Ini</h6>
                <textarea class="form-control @error('disease') is-invalid @enderror" name="disease" id="disease" placeholder="Tuliskan kondisi kesehatan saat ini" rows="4" required></textarea>
                @error('disease')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Pola Makan</h6>
                <select name="eating_habits[]" id="eating_habit" class="form-control @error('eating_habits') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Pola Makan</option>
                    @foreach($eatingHabits as $habit)
                        <option value="{{ $habit->id }}">{{ $habit->eating_habit }}</option>
                    @endforeach
                </select>                
                
                @error('eating_habits')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            <div class="form-group" required>
                <h6>Pola makan yang dipilih:</h6>
                <ul id="selectedEatingHabitList"></ul>
            </div>

            <div class="form-group">
                <h6>Pola Tidur</h6>
                <select name="sleep_patterns[]" id="sleep_pattern" class="form-control @error('sleep_patterns') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Pola Tidur</option>
                    @foreach($sleepPatterns as $pattern)
                        <option value="{{ $pattern->id }}">{{ $pattern->sleep_pattern }}</option>
                    @endforeach
                </select>                
                
                @error('sleep_patterns')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            <div class="form-group" required>
                <h6>Pola tidur yang dipilih:</h6>
                <ul id="selectedSleepPatternList"></ul>
            </div>

            <input type="hidden" name="disease_history_input" id="diseaseHistoryInput">
            <input type="hidden" name="eating_habits_input" id="eatingHabitInput">
            <input type="hidden" name="sleep_patterns_input" id="sleepPatternInput">


            <button type="submit" class="btn btn-primary w-100 text-white font-weight-bold">{{ __('Selesai') }}</button>
        </form>
    </div>
</body>
@push('scripts')
    <script src="{{ asset('js/form-handler.js') }}"></script>
@endpush
@endsection