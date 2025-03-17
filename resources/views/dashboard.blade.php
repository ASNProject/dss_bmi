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
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
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
            border-radius: 8px;
        }
        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 8px;
            font-size: 1.2rem;
            margin-right: 10px;
            min-width: 2.5rem;
            min-height: 2.5rem;
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 0; 
        }
        .navbar {
            width: 100%;
            background-color: #f8f9fa;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="#" style="font-size: 36px">Beranda</a>
            </div>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <div class="collapse navbar-collapse " id="navbarNav">
                {{-- <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('analisis') }}">Analisis Berat Badan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('measurement') }}">Monitoring Pola Hidup</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('recommendation') }}">Rekomendasi Kegiatan</a></li>
                </ul> --}}
                <ul class="navbar-nav logout-link">
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
    <div class="container mt-5 p-5">
        <div class="d-flex justify-content-center align-items-center py-8 mb-5">
            <h3 class="font-weight-bold">Monitoring kesehatan dan pola hidup Anda</h3>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 col-12 mb-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box" style="background-color: #d0e7ff; color: #0d6efd">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h5 class="card-title">Analisis Berat Badan dan Pola Hidup</h5> 
                        </div>
                        <p class="card-text">Laporkan berat badan dan pola hidup Anda untuk mencapai kesehatan yang optimal.</p>
                        <a href="{{ route('analisis') }}" class="btn btn-primary">Ketuk untuk memasukkan data</a>
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
                            <h5 class="card-title">Monitoring Pola Hidup</h5>
                        </div>
                        <p class="card-text">Monitoring tren kesehatan dan berat badan Anda.</p>
                        <a href="{{ route('measurement') }}" class="btn btn-success">Ketuk untuk melihat tren</a>
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
                            <h5 class="card-title">Rekomendasi Pola Kegiatan Harian</h5>
                        </div>
                        <p class="card-text">Dapatkan rekomendasi kegiatan harian yang disesuaikan dengan gaya hidup dan tujuan Anda.</p>
                        <a href="{{ route('recommendation') }}" class="btn btn-purple">Ketuk untuk melihat Rekomendasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

