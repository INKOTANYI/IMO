@extends('layouts.app')
@section('title','Composer')
@section('content')
@if($errors->any())
<div class="alert alert-danger">
  <ul class="m-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
</div>
@endif
@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="card">
  <div class="card-header">Create Post</div>
  <div class="card-body">
    <form method="post" action="{{ route('admin.social.posts.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control" rows="4" maxlength="1000" placeholder="Write your post...">{{ old('content') }}</textarea>
      </div>
      <div class="form-group">
        <label>Link (optional)</label>
        <input type="url" class="form-control" name="link_url" value="{{ old('link_url') }}" placeholder="https://example.com">
      </div>
      <div class="form-group">
        <label>Targets</label>
        <div class="row">
          @forelse($accounts as $acc)
            <div class="col-md-4">
              <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="acc{{ $acc->id }}" name="accounts[]" value="{{ $acc->id }}" {{ in_array($acc->id, old('accounts', [])) ? 'checked' : '' }}>
                <label class="custom-control-label" for="acc{{ $acc->id }}">{{ ucfirst($acc->provider) }} — {{ $acc->name ?? $acc->username }}</label>
              </div>
            </div>
          @empty
            <div class="col-12"><em>No connected accounts. Connect in Accounts page.</em></div>
          @endforelse
        </div>
      </div>
      <div class="form-group">
        <label>Media (images/video)</label>
        <input type="file" name="media[]" class="form-control-file" multiple accept="image/*,video/*">
        <small class="form-text text-muted">Max 10MB per file. JPG, PNG, GIF, WEBP, MP4, MOV.</small>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Schedule (optional)</label>
          <input type="datetime-local" class="form-control" name="scheduled_at" value="{{ old('scheduled_at') }}">
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
  </div>
</div>
@endsection
