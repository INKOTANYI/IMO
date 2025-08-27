@extends('dashboard')

@section('title', 'Edit Photo')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Edit Photo</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.photos.update', $photo) }}" method="POST" enctype="multipart/form-data" role="form" aria-label="Edit Photo Form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $photo->title) }}" required aria-required="true" placeholder="Enter photo title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description (Optional)</label>
                    <textarea name="description" id="description" class="form-control" rows="4" aria-label="Photo description">{{ old('description', $photo->description) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image (Optional)</label>
                    <input type="file" name="image" id="image" class="form-control-file" accept="image/*" aria-label="Replace photo">
                    <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" style="max-width: 100px; height: auto; margin-top: 10px;" loading="lazy">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: var(--accent-yellow); color: var(--primary-blue);" aria-label="Update Photo">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection