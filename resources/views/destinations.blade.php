@extends('layouts.app')

@section('title', 'Destinations')

@section('content')
<div class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&q=80&w=2070'); background-size: cover; color: white;">
    <div class="hero-content fade-up">
        <h1>Destinations</h1>
        <p>Curated escapes for the modern traveler.</p>
    </div>
</div>

<main>
    <div class="section-title fade-up">
        <h2>Simple. Elegant. Pure.</h2>
    </div>

    <div class="grid">
        <div class="card fade-up" style="animation-delay: 0.1s;">
            <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=1200" alt="Mountain" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
            <h3>Mountain Retreat</h3>
            <p>High peaks and misty mornings.</p>
        </div>
        <div class="card fade-up" style="animation-delay: 0.2s;">
            <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&q=80&w=1200" alt="Coastal" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
            <h3>Coastal Serenity</h3>
            <p>Endless horizons and soft sands.</p>
        </div>
        <div class="card fade-up" style="animation-delay: 0.3s;">
            <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&q=80&w=1200" alt="Architecture" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
            <h3>Architectural Grace</h3>
            <p>Minimalist lines in perfect light.</p>
        </div>
    </div>
</main>
@endsection
