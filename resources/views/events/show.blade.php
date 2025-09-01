@extends('layouts.app')

@section('title', $event->title)

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $event->title }}</h3>
        </div>
        <div class="card-body">
            @if($event->image)
                <img src="{{ asset('storage/events/' . $event->image) }}" alt="{{ $event->title }}" class="img-fluid rounded mb-3" style="max-height: 300px; width: 100%; object-fit: cover;">
            @else
                <img src="{{ asset('images/placeholder-event.jpg') }}" alt="Event Placeholder" class="img-fluid rounded mb-3" style="max-height: 300px; width: 100%; object-fit: cover;">
            @endif
            <p><strong>Date:</strong> {{ $event->date_time->format('F j, Y, g:i A') }}</p>
            <p><strong>Location:</strong> {{ $event->location }}</p>
            <p><strong>Description:</strong> {{ $event->description }}</p>
            <a href="{{ route('events.index') }}" class="btn btn-primary">Back to Events</a>
        </div>
    </div>
@endsection
