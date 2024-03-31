@extends('layouts.app')

@section('content')
    <div class="property-details">
        <h2>{{ $property->name }}</h2>
        <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->name }}">
        <p>Rent: ${{ $property->rent }}</p>
        <p>Bedrooms: {{ $property->bedrooms }}</p>
        <!-- Add other property details as needed -->
        <p>Description: {{ $property->description }}</p>
        
        <!-- Display additional images if available -->
        @if ($property->additionalImages->isNotEmpty())
            <div class="additional-images">
                <h3>Additional Images</h3>
                @foreach ($property->additionalImages as $image)
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Additional Image">
                @endforeach
            </div>
        @endif

        <!-- Feedback Form -->
        <div class="feedback-form">
            <h3>Leave Feedback</h3>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('properties.submitFeedback', $property->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea id="feedback" name="feedback" rows="3" required></textarea>
                </div>
                <button type="submit">Submit Feedback</button>
            </form>
        </div>
    </div>
@endsection
