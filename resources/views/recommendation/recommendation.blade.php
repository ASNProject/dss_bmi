@extends('layouts.app', ['title' => 'Rekomendasi Pola Kegiatan Harian'])
@section('content')
<body>
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('dashboard') }}" class="text-dark" style="font-size: 1rem">Kembali</a>
            <div>
                <form method="GET" action="{{ route('recommendation') }}" class="form-inline">
                    <div class="form-group mr-2">
                        <label for="id_filter" class="mr-2">Filter</label>
                        <select name="id_filter" id="id_filter" class="form-control form-control-sm">
                            <option value="">Pilih Data BMI</option>
                            @foreach($bmiRecords as $record)
                                <option value="{{ $record->id }}">
                                    {{ \Carbon\Carbon::parse($record->created_at)->format('d-m-Y') }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                </form>
            </div>
        </div>
        <div class="col-12 mb-3">
            <div class="card w-100 p-3" style="background-color: white">
                <h3 class="font-weight-bold">Rekomendasi Pola Kegiatan Harian</h3>
                <h7 style="font-size: 14px">Berdasarkan hasil BMI dan kategori kesehatan Anda</h7>
            </div>
        </div>
       <!-- Menampilkan Data BMI -->
        @if(isset($bmiData))
            <div class="col-12 mb-3">
                <div class="card w-100 p-3" style="background-color: white">
                    <div class="d-flex justify-content">
                        <h6 class="mr-1">Status BMI Anda:</h6>
                        <h6 style="color: deepskyblue">{{ $bmiData->bmi_category }} ({{ $bmiData->bmi }})</h6>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Pola Makan</h6>
                            <ul>
                                @php
                                    $eatRecommendation = json_decode($bmiData->eat_recommendation, true);
                                @endphp
                                @if(is_array($eatRecommendation))
                                    @foreach($eatRecommendation as $recommendation)
                                        <li>{{ $recommendation }}</li>
                                    @endforeach
                                @else
                                    <li>{{ $bmiData->eat_recommendation }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Aktivitas Fisik</h6>
                            <ul>
                                @php
                                    $physicalActivity = json_decode($bmiData->physical_activity, true);
                                @endphp
                                @if(is_array($physicalActivity))
                                    @foreach($physicalActivity as $recommendation)
                                        <li>{{ $recommendation }}</li>
                                    @endforeach
                                @else
                                    <li>{{ $bmiData->physical_activity }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</body>
@endsection