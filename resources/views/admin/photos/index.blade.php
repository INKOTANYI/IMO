@extends('dashboard')

@section('title', 'Manage Photos')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Manage Photos</h1>
    <a href="{{ route('admin.photos.create') }}" class="btn btn-primary mb-3" style="background-color: var(--accent-yellow); color: var(--primary-blue);" aria-label="Upload New Photo">Upload New Photo</a>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table id="photosTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($photos as $photo)
                        <tr>
                            <td>{{ $photo->title }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}" style="max-width: 100px; height: auto;" loading="lazy">
                            </td>
                            <td>{{ $photo->description ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('admin.photos.edit', $photo) }}" class="btn btn-sm btn-warning" style="background-color: var(--accent-yellow); color: var(--primary-blue);" aria-label="Edit {{ $photo->title }}">Edit</a>
                                <form action="{{ route('admin.photos.destroy', $photo) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this photo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" aria-label="Delete {{ $photo->title }}">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#photosTable').DataTable({
        responsive: true,
        pageLength: 10,
        order: [[0, 'asc']],
        language: {
            search: 'Filter photos:',
            searchPlaceholder: 'Search photos...'
        }
    });
});
</script>
@endsection