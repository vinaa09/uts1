@extends('layouts.masterlayout')

@section('title', 'Home - Kuliner Dunia')

@section('content')

    <div class="creator">
        <div>24010600009 - Vina Ananda</div>
        <div>Halaman ini dibuat oleh Vina Ananda</div>
    </div>

    <div class="hero-text">Explore The World</div>

    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/croissant.jpeg.jpg') }}" alt="Acropolis, Yunani">
                <div class="caption">Croissant, Prancis</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/pizza.webp') }}" alt="Shibuya, Jepang">
                <div class="caption">Pizza, Italia</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/sushi.jpg') }}" alt="Cappadocia, Turki">
                <div class="caption">Sushi, Jepang</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/rendang.jpg') }}" alt="Giza, Mesir">
                <div class="caption">Rendang, Indonesia</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/tacos.jpg') }}" alt="Garuda Wisnu Kencana, Bali">
                <div class="caption">Tacos, Meksiko</div>
            </div>
        </div>

         <div class="col-md-4">
            <div class="destination-card">
                <img src="{{ asset('images/Tom Yum.jpeg') }}" alt="Garuda Wisnu Kencana, Bali">
                <div class="caption">Tom Yum, Thailand</div>
            </div>
        </div>


      

@endsection
