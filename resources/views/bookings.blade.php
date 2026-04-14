@extends('layouts.app')

@section('title', 'Bookings')

@section('content')
<div class="hero" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&q=80&w=1200'); background-size: cover; color: white;">
    <div class="hero-content fade-up">
        <h1>Bookings</h1>
        <p>Your journey begins here.</p>
    </div>
</div>

<main>
    <div class="section-title fade-up">
        <h2>Reserve Your Experience</h2>
        <p>Simple, secure, and tailored to your comfort.</p>
    </div>

    <div class="card fade-up" style="max-width: 600px; margin: 0 auto; background: white;">
        <form style="display: flex; flex-direction: column; gap: 20px;">
            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600;">Destination</label>
                <select style="padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;">
                    <option>Ubud Serenity, Bali</option>
                    <option>Aegean Bliss, Santorini</option>
                    <option>Alpine Retreat, Switzerland</option>
                    <option>Custom Hidden Gem</option>
                </select>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="display: flex; flex-direction: column; gap: 5px;">
                    <label style="font-weight: 600;">Check-in</label>
                    <input type="date" style="padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;">
                </div>
                <div style="display: flex; flex-direction: column; gap: 5px;">
                    <label style="font-weight: 600;">Check-out</label>
                    <input type="date" style="padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;">
                </div>
            </div>
            <div style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600;">Comfort Level</label>
                <div style="display: flex; gap: 15px; margin-top: 10px;">
                    <label><input type="radio" name="comfort" checked> Standard</label>
                    <label><input type="radio" name="comfort"> Premium</label>
                    <label><input type="radio" name="comfort"> Imperial</label>
                </div>
            </div>
            <button type="button" style="background: var(--primary); color: white; padding: 15px; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; margin-top: 10px; transition: background 0.3s ease;">
                Confirm Availability
            </button>
        </form>
    </div>
</main>
@endsection
