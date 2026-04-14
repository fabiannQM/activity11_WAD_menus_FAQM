@extends('layouts.app')

@section('title', 'Travel Log')

@section('content')
<div class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1452421822248-d4c2b47f0c03?auto=format&fit=crop&q=80&w=1200'); background-size: cover; color: white;">
    <div class="hero-content fade-up">
        <h1>Travel Log</h1>
        <p>Reflections on a life in motion.</p>
    </div>
</div>

<main>
    <div class="section-title fade-up">
        <h2>Latest Entries</h2>
        <p>Updates from our wanderers around the globe.</p>
    </div>

    <div class="grid">
        <div class="card fade-up" style="animation-delay: 0.1s;">
            <div style="color: var(--accent); font-weight: 600; margin-bottom: 10px;">Oct 12, 2024</div>
            <h3>Finding Peace in Japan</h3>
            <p>Walking through the bamboo forests of Kyoto taught me more about silence than any book ever could...</p>
            <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 600; margin-top: 15px; display: inline-block;">Read More →</a>
        </div>
        <div class="card fade-up" style="animation-delay: 0.2s;">
            <div style="color: var(--accent); font-weight: 600; margin-bottom: 10px;">Sept 28, 2024</div>
            <h3>The Colors of Morocco</h3>
            <p>The spices, the textiles, and the endless blue of Chefchaouen. Morocco is a sensory overload in the best way...</p>
            <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 600; margin-top: 15px; display: inline-block;">Read More →</a>
        </div>
        <div class="card fade-up" style="animation-delay: 0.3s;">
            <div style="color: var(--accent); font-weight: 600; margin-bottom: 10px;">Aug 15, 2024</div>
            <h3>Midnight Sun in Iceland</h3>
            <p>The sun never sets, and the waterfalls never stop. Iceland is like another planet entirely...</p>
            <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 600; margin-top: 15px; display: inline-block;">Read More →</a>
        </div>
    </div>
</main>
@endsection
