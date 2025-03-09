@extends('layouts.app', ['title' => 'Riwayat Pengukuran Mingguan'])
@section('content')
    <body class="bg-white">
        <div class="container">
            <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('dashboard') }}" class="text-dark" style="font-size: 1rem">Kembali</a>
            </div>
            <div class="col-12 mb-5">
                <h3 class="font-weight-bold">Riwayat Pengukuran Mingguan</h3>
            </div>
            <div class="col-12 mb-5" style="width: 100%">
                <canvas id="myChart"></canvas>
            </div>
            <div class="col-12 mb-5">
                <div class="table-responsive" style="max-height: 700px; overflow-y: auto;">
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <tr>
                                <th scope="col" class="text-center align-middle">Tanggal</th>
                                <th scope="col" class="text-center align-middle">BMI</th>
                                <th scope="col" class="text-center align-middle">Berat (kg)</th>
                                <th scope="col" class="text-center align-middle">Kategori</th>
                                <th scope="col" class="text-center align-middle">Aktivitas</th>
                                <th scope="col" class="text-center align-middle">Rekomendasi Pola Makan</th>
                                <th scope="col" class="text-center align-middle">Rekomendasi Pola Tidur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($bmiRecords as $record)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($record->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ $record->bmi }}</td>
                                    <td>{{ $record->weight }}</td>
                                    <td>{{ $record->bmi_category }}</td>
                                    <td>
                                        <ul>
                                            @foreach($record->physical_activity as $activity)
                                                <li>{{ $activity }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach($record->eat_recommendation as $eat)
                                                <li>{{ $eat }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach($record->sleep_recommendation as $sleep)
                                                <li>{{ $sleep }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data pengukuran tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 mb-5">
                <div class="card w-100 p-3" style="background-color: aliceblue; height: 100%">
                    <div>
                        <h4 class="font-weight-bold mb-3" style="font-size: 20px">Ringkasan Mingguan</h4>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h6 style="font-size: 16px">Total {{$data['title']}} Berat: {{ number_format(abs($data['totalWeightLoss']), 1) }} kg</h6>
                            <h6 style="font-size: 16px">{{$data['title']}} BMI: {{ number_format(abs($data['totalBmiLoss']), 2) }} poin</h6>
                        </div>
                        <div>
                            <h6 style="font-size: 16px">Tren: {{ $data['trend'] }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($data['dates']) !!}.reverse(),
                datasets: [
                    {
                        label: 'BMI',
                        borderColor: 'blue',
                        data: {!! json_encode($data['bmi']) !!}.reverse()
                    },
                    {
                        label: 'Berat (kg)',
                        borderColor: 'green',
                        data: {!! json_encode($data['weight']) !!}.reverse()
                    }
                ]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                    }
                }
            }
        });
    </script>
@endsection