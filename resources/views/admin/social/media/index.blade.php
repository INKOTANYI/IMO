@extends('layouts.app')
@section('title','Media Library')
@section('content')
@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
@if($errors->any())
<div class="alert alert-danger"><ul class="m-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
@endif
<div class="card mb-3">
  <div class="card-header">Upload Media</div>
  <div class="card-body">
    <form method="post" action="{{ route('admin.social.media.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-row align-items-center">
        <div class="col-md-8 mb-2">
          <input type="file" name="media[]" class="form-control-file" multiple accept="image/*,video/*">
          <small class="form-text text-muted">Max 10MB per file. JPG, PNG, GIF, WEBP, MP4, MOV.</small>
        </div>
        <div class="col-md-4 mb-2 text-right">
          <button class="btn btn-primary">Upload</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="row">
  @forelse($media as $m)
    <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
      <div class="card h-100">
        @if(str_starts_with((string) $m->mime, 'image/'))
          <img class="card-img-top" alt="media" src="{{ asset('storage/'.$m->path) }}">
        @else
          <div class="card-body d-flex align-items-center justify-content-center" style="min-height:160px;">
            <i class="fas fa-video fa-3x text-muted"></i>
          </div>
        @endif
        <div class="card-body p-2">
          <small class="text-muted">{{ $m->mime }} • {{ number_format(($m->size ?? 0)/1024,0) }} KB</small>
        </div>
      </div>
    </div>
  @empty
    <div class="col-12"><em>No media yet. Upload above.</em></div>
  @endforelse
</div>
@if(method_exists($media,'links'))
<div class="mt-2">{{ $media->links() }}</div>
@endif
@endsection
