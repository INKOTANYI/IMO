@extends('dashboard')

@section('title', 'Upload Photo')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Upload Photo</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data" role="form" aria-label="Upload Photo Form">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required aria-required="true" placeholder="Enter photo title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description (Optional)</label>
                    <textarea name="description" id="description" class="form-control" rows="4" aria-label="Photo description"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file" accept="image/*" required aria-required="true">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: var(--accent-yellow); color: var(--primary-blue);" aria-label="Upload Photo">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection