@extends('layouts.masterlayout')

@section('title', 'About - Explore The World')

@section('content')

    <!-- Judul Halaman -->
    <div class="text-center mt-4">
        <h3 class="fw-bold">Halaman ini dibuat oleh: 24010600006 - Dira Dwi Ananda</h3>
    </div>

    <!-- Kontainer Kartu Profil -->
    <div class="row justify-content-center mt-5 g-4">
        <!-- Profil 1 -->
        <div class="col-md-5">
            <div class="card profile-card mx-auto">
                <div class="profile-img">
                    <img src="{{ asset('images/10.jpg') }}" alt="Vina Ananda">
                </div>
                <div class="card-body text-center text-white">
                    <h4 class="fw-bold">Vina Ananda</h4>
                    <p class="text-light">24010600009</p>
                    <div class="bio-box">
                        <h6>BIO</h6>
                        <p>Mahasiswa yang selalu bersemangat menciptakan karya digital yang interaktif, estetik, dan penuh makna. 🚀</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profil 2 -->
        <div class="col-md-5">
            <div class="card profile-card mx-auto">
                <div class="profile-img">
                    <img src="{{ asset('images/11.jpg') }}" alt=" Dira Dwin Ananda">
                </div>
                <div class="card-body text-center text-white">
                    <h4 class="fw-bold">Dira Dwi Ananda</h4>
                    <p class="text-light">24010600006</p>
                    <div class="bio-box">
                        <h6>BIO</h6>
                        <p>Menggabungkan rasa ingin tahu, imajinasi, dan teknologi untuk menciptakan tampilan web yang memikat mata dan hati.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .profile-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 30px 0 20px;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-8px);
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .bio-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 10px;
            margin-top: 15px;
        }

        .bio-box h6 {
            font-weight: 700;
            letter-spacing: 1px;
            color: #ffc107;
        }

        .bio-box p {
            font-size: 15px;
            margin-bottom: 0;
        }
    </style>

@endsection