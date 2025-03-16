@extends('layouts.app', ['title' => 'Rekomendasi Pola Kegiatan Harian'])
@section('content')
<head>
    <style>
        .navbar {
            width: 100%;
            background-color: #6f42c1;
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
<body>
    <nav class="navbar navbar-expand-lg navbar-light w-100">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-size: 36px; color: white">Dashboard</a>
                <h6 class="" style="margin-top: -10px; color: white">Monitoring kesehatan dan pola hidup Anda</h6>
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
    <div class="container p-5 mt-5">
        <div class="d-flex justify-content-end mb-3">
            {{-- <a href="{{ route('dashboard') }}" class="text-dark" style="font-size: 1rem">Kembali</a> --}}
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
                    <div>
                        <h6 class="mr-1">Rekomendasi Kalori Harian: {{$bmiData->calorie}} kkal</h6>
                    </div>
                </div>
            </div>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Pola Makan</h6>
                            <div>
                                @php
                                    $eatRecommendation = json_decode($bmiData->eat_recommendation, true);
                                @endphp
                                @if(is_array($eatRecommendation))
                                    @foreach($eatRecommendation as $recommendation)
                                        <div>{!! nl2br($recommendation) !!}</div>
                                    @endforeach
                                @else
                                    <div>{!! nl2br($bmiData->eat_recommendation) !!}</div>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Pola Tidur</h6>
                            <div>
                                @php
                                    $sleepRecommendation = json_decode($bmiData->sleep_recommendation, true);
                                @endphp
                                @if(is_array($sleepRecommendation))
                                    @foreach($sleepRecommendation as $recommendation)
                                        <div>{!! nl2br($recommendation) !!}</div>
                                    @endforeach
                                @else
                                    <div>{!! nl2br($bmiData->sleep_recommendation) !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Makanan</h6>
                            <div>
                                @php
                                    $eatPattern = json_decode($bmiData->eat_pattern, true);
                                @endphp
                                @if(is_array($eatPattern))
                                    @foreach($eatPattern as $recommendation)
                                        <div>{!! nl2br($recommendation) !!}</div>
                                    @endforeach
                                @else
                                    <div>{!! nl2br($bmiData->eat_pattern) !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Larangan Makanan</h6>
                            <div>
                                @php
                                    $foodRestriction = json_decode($bmiData->food_restriction, true);
                                @endphp
                                @if(is_array($foodRestriction))
                                    @foreach($foodRestriction as $recommendation)
                                        <div>{!! nl2br($recommendation) !!}</div>
                                    @endforeach
                                @else
                                    <div>{!! nl2br($bmiData->food_restriction) !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Aktivitas Fisik</h6>
                            <div>
                                @php
                                    $physicalActivity = json_decode($bmiData->physical_activity, true);
                                @endphp
                                @if(is_array($physicalActivity))
                                    @foreach($physicalActivity as $recommendation)
                                        <div>{!! nl2br($recommendation) !!}</div>
                                    @endforeach
                                @else
                                    <div>{!! nl2br($bmiData->physical_activity) !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <div class="card w-100 p-3" style="background-color: white; height: 100%">
                            <h6 class="mr-1 font-weight-bold">Rekomendasi Pola Aktivitas</h6>
                            <div>
                                @php
                                    $activityPattern = json_decode($bmiData->activity_pattern, true);
                                @endphp
                                @if(is_array($activityPattern))
                                    @foreach($activityPattern as $recommendation)
                                        <div>{!! nl2br($recommendation) !!}</div>
                                    @endforeach
                                @else
                                    <div>{!! nl2br($bmiData->activity_pattern) !!}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</body>
@endsection