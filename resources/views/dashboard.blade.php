@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')
<head>
    <style>
        .btn-purple {
            background-color: #6f42c1; 
            border-color: #6f42c1;
            color: white; 
        }
        .btn-purple:hover {
            background-color: #5a2a99; 
            border-color: #5a2a99;
            color: white;
        }
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: left;
            height: 100%; 
        }
        .card-body .btn {
            margin-top: auto;
        }
        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2rem;
            height: 2rem;
            border-radius: 8px;
            font-size: 1rem;
            margin-right: 10px;
            min-width: 2rem;
            min-height: 2rem;
        }
        .card-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 0; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <div class="d-flex align-items-center" style="justify-content: space-between;">
                <h1 class="text-start font-weight-bold">Dashboard</h1>
                <div class="col-md-1">
                    <a style="color: black" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>            
            </div>
            <h3 style="font-size: 14px">Monitoring kesehatan dan pola hidup Anda</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box" style="background-color: #d0e7ff; color: #0d6efd">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h5 class="card-title font-weight-bold" style="font-size: 16px">Analisis Berat Badan dan Pola Hidup</h5> 
                        </div>
                        <p class="card-text" style="font-size: 14px">Pantau berat badan dan analisis pola hidup Anda untuk mencapai kesehatan yang optimal.</p>
                        <div>
                            <a href="{{ route('analisis') }}" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box" style="background-color: #90EE90; color: #28a745">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h5 class="card-title font-weight-bold" style="font-size: 16px">Monitoring Pola Hidup</h5>
                        </div>
                        <p class="card-text" style="font-size: 14px">Monitoring aktivitas harian, pola makan, dan kebiasaan untuk meningkatkan kualitas hidup Anda.</p>
                        <div>
                            <a href="#" class="btn btn-success">Lihat Detail</a>
                        </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box" style="background-color: #D8A7FF; color: #6F42C1">
                                <i class="fas fa-calendar"></i>
                            </div>
                            <h5 class="card-title font-weight-bold" style="font-size: 16px">Rekomendasi Pola Kegiatan Harian</h5>
                        </div>
                        <p class="card-text" style="font-size: 14px">Dapatkan rekomendasi kegiatan harian yang disesuaikan dengan gaya hidup dan tujuan Anda.</p>
                        <div>
                            <a href="#" class="btn btn-purple">Lihat Detail</a>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</body>
@endsection