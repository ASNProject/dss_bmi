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
                <h6>Jenis Kelamin</h6>
                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>                
                @error('gender')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>
            <div class="form-group">
                <h6>Riwayat Penyakit</h6>
                <select name="disease_history[]" id="disease_history" class="form-control @error('disease_history') is-invalid @enderror" required>
                    <option value="" disabled>Pilih riwayat penyakit yang pernah dialami</option>
                    <option value="1">Tidak Ada Penyakit</option>
                    <option value="2">Hipertensi (Tekanan Darah Tinggi)</option>
                    <option value="3">Diabetes</option>
                    <option value="4">Penyakit Jantung</option>
                    <option value="5">Stroke</option>
                    <option value="6">Kanker</option>
                    <option value="0">Lainnya</option>
                </select>                
                
                @error('disease_history')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            <div class="form-group">
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
                <select name="eating_habits[]" id="eating_habits" class="form-control @error('eating_habits') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih Pola Makan</option>
                    <option value="1">Seimbang (makanan bergizi seimbang)</option>
                    <option value="2">Makanan Cepat Saji</option>
                    <option value="3">Vegetarian</option>
                    <option value="4">Vegan</option>
                    <option value="5">Makanan Ringan (Junk Food)</option>
                    <option value="6">Tidak Teratur</option>
                    <option value="0">Lainnya</option>
                </select>                
                
                @error('eating_habits')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            <div class="form-group">
                <h6>Pola makan yang dipilih:</h6>
                <ul id="selectedEatingHabitsList"></ul>
            </div>

            <div class="form-group">
                <h6>Pola Tidur</h6>
                <select name="sleep_patterns[]" id="sleep_patterns" class="form-control @error('sleep_patterns') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih Pola Tidur</option>
                    <option value="1">Teratur (tidur dan bangun pada waktu yang sama setiap hari)</option>
                    <option value="2">Tidak Teratur (waktu tidur dan bangun yang berubah-ubah)</option>
                    <option value="3">Insomnia (kesulitan tidur)</option>
                    <option value="4">Tidur Berlebihan (lebih dari 9 jam per hari)</option>
                    <option value="5">Tidur Singkat (kurang dari 6 jam per hari)</option>
                    <option value="6">Tidur Siang</option>
                    <option value="0">Lainnya</option>
                </select>                
                
                @error('sleep_patterns')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>    
                @enderror
            </div>

            <div class="form-group">
                <h6>Pola tidur yang dipilih:</h6>
                <ul id="selectedSleepingPatternsList"></ul>
            </div>

            <button type="submit" class="btn btn-primary w-100 text-white font-weight-bold">{{ __('Selesai') }}</button>
        </form>
    </div>
    <script>
        function updateSelectedList(dropdownId, listId) {
            var selectedValues = Array.from(document.getElementById(dropdownId).selectedOptions).map(option => option.text);
            var selectedList = document.getElementById(listId);
    
            selectedValues.forEach(function(value) {
                if (![...selectedList.children].some(item => item.textContent === value)) {
                    var listItem = document.createElement('li');
                    listItem.textContent = value;

                    var removeButton = document.createElement('a');
                    removeButton.href = '#';
                    removeButton.textContent = ' Hapus';
                    removeButton.classList.add('text-danger');
                    
                    removeButton.addEventListener('click', function(event) {
                        event.preventDefault(); // Mencegah pengalihan halaman
                        listItem.remove(); // Menghapus item dari list
                    });
                    
                    listItem.appendChild(removeButton);
                    selectedList.appendChild(listItem);
                }

            });
        }
    
        document.getElementById('disease_history').addEventListener('change', function() {
            updateSelectedList('disease_history', 'selectedDiseasesList');
        });
    
        document.getElementById('eating_habits').addEventListener('change', function() {
            updateSelectedList('eating_habits', 'selectedEatingHabitsList');
        });
    
        document.getElementById('sleep_patterns').addEventListener('change', function() {
            updateSelectedList('sleep_patterns', 'selectedSleepingPatternsList');
        });
    </script>
</body>
@endsection