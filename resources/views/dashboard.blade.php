@extends('layouts.app')

@section('title', 'Dashboard Pegawai')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Dashboard</h2>
    </div>
    
    <!-- Welcome section -->
    <div class="welcome-container p-4 rounded shadow-sm bg-white d-flex align-items-center justify-content-between">
        <div>
            <h4 class="fw-bold text-dark">Hi, Maniezzzzzzz!</h4>
            <p class="text-muted mb-0">Selamat datang!!</p>
        </div>
        <div class="position-relative">
            <img src="{{ asset('images/image.png') }}" alt="Admin Illustration" class="img-fluid rounded-circle highlight-img">
        </div>
    </div>

    <!-- statistik section -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card-metrics metric-1 p-3 rounded shadow-sm text-center">
                <h3 class="fw-bold">83%</h3>
                <p class="mb-0">Data Tervalidasi</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-metrics metric-2 p-3 rounded shadow-sm text-center">
                <h3 class="fw-bold">77%</h3>
                <p class="mb-0">Data Terisi</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-metrics metric-3 p-3 rounded shadow-sm text-center">
                <h3 class="fw-bold">91</h3>
                <p class="mb-0">Data Baru</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-metrics metric-4 p-3 rounded shadow-sm text-center">
                <h3 class="fw-bold">126</h3>
                <p class="mb-0">Total Data</p>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-metrics {
            border-radius: 10px;
            color: white;
            font-weight: bold;
            transition: transform 0.3s ease-in-out;
        }

        .card-metrics:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .metric-1 { background: #df3cd7; }
        .metric-2 { background: #1dd1a1; }
        .metric-3 { background: #ee5253; }
        .metric-4 { background: #5f27cd; }

        .welcome-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .highlight-img { 
            max-width: 140px; 
            height: auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); 
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-top: -20px; 
            z-index: 10;
        }

        .highlight-img:hover {
            transform: scale(1.1); 
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); 
        }
    </style>
@endsection
