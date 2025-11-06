@extends('layouts.app')

@section('title', 'Edit Event')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Update Event: {{ $event->title }}</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $event->location) }}" required>
                </div>
                <div class="form-group">
                    <label for="date_time">Date & Time</label>
                    <input type="datetime-local" name="date_time" id="date_time" class="form-control" value="{{ old('date_time', $event->date_time->format('Y-m-d\TH:i')) }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $event->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image (Optional)</label>
                    @if($event->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" style="max-width: 200px; border-radius: 5px;">
                        </div>
                    @endif
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="images">Gallery Images (Optional, multiple)</label>
                    <input type="file" name="images[]" id="images" class="form-control-file" accept="image/*" multiple>
                    <small class="form-text text-muted">You can select multiple images. Max 8MB each.</small>
                </div>
                @if($event->images && $event->images->count())
                <div class="form-group">
                    <label>Existing Gallery</label>
                    <div class="d-flex flex-wrap" style="gap:10px;">
                        @foreach($event->images as $img)
                            <img src="{{ asset('storage/' . $img->image_path) }}" alt="" style="width:110px; height:110px; object-fit:cover; border-radius:6px;">
                        @endforeach
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-primary">Update Event</button>
                <a href="{{ route('events.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
