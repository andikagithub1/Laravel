@extends('layouts/app')

@section('content')
    <div class="container">

        <!-- Section for User Welcome Message -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="text-primary font-weight-bold">Andika Putra Pratama XI PPL 2</h3>
                <div class="chat-notification">
                    <div class="chat-bubble">
                        <div class="chat-header">
                            <img src="{{ asset('images/wa-removebg-preview.png') }}" alt="WhatsApp" width="30" height="30">

                            <span class="chat-username">Andika Putra Pratama</span>
                        </div>
                        <div class="chat-message">
                            <p>Selamat datang diperbudakan saya!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-left-primary">
                    <div class="card-body">
                        <h5 class="card-title">Earnings (Monthly)</h5>
                        <p class="card-text">Rp 5.000.000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-left-success">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">1200</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-left-danger">
                    <div class="card-body">
                        <h5 class="card-title">Total Projects</h5>
                        <p class="card-text">35</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Area Chart</h5>
                        <div id="chartArea" style="height: 200px;"></div>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h5 class="card-title">Content Column</h5>
                        <p class="card-text">Add your content here.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        .chat-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 250px;
            background-color: #25d366;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            font-family: 'Nunito', sans-serif;
        }

        .chat-bubble {
            background-color: white;
            padding: 10px;
            border-radius: 15px;
            margin-top: 10px;
        }

        .chat-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .chat-username {
            font-weight: bold;
            margin-left: 10px;
        }

        .chat-message p {
            margin: 0;
            color: #333;
        }

        .card {
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: 600;
            font-size: 18px;
        }

        .card-text {
            font-size: 16px;
            color: #555;
        }

        .border-left-primary {
            border-left: 5px solid #4e73df;
        }

        .border-left-success {
            border-left: 5px solid #1cc88a;
        }

        .border-left-danger {
            border-left: 5px solid #e74a3b;
        }
    </style>

@endsection
