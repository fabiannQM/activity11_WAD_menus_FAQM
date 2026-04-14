@extends('layouts.app')

@section('title', 'Hidden Gems')

@section('content')
<div class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=1200'); background-size: cover; color: white;">
    <div class="hero-content fade-up">
        <h1>Hidden Gems</h1>
        <p>Unspoken beauty in the quiet corners of the earth.</p>
    </div>
</div>

<main>
    <div class="section-title fade-up">
        <h2>Curated Secrets</h2>
    </div>

    <div class="grid">
        <div class="card fade-up" style="animation-delay: 0.1s;">
            <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&q=80&w=1200" alt="Architecture" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
            <h3>The Stone Hall</h3>
            <p>Monolithic structures in gray stone.</p>
        </div>
        <div class="card fade-up" style="animation-delay: 0.2s;">
            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&q=80&w=2070" alt="Lake" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
            <h3>Mist Lake</h3>
            <p>A silent mirror in the mountains.</p>
        </div>
        <div class="card fade-up" style="animation-delay: 0.3s;">
            <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&q=80&w=1200" alt="Sand" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
            <h3>Dune Silence</h3>
            <p>Endless beige sands under a gray sky.</p>
        </div>
    </div>
</main>
@endsection
