@extends('layouts.app')
@section('title','Posts')
@section('content')
@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <span>Posts</span>
    <a href="{{ route('admin.social.posts.create') }}" class="btn btn-primary btn-sm">New Post</a>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped m-0">
      <thead><tr><th>ID</th><th>Content</th><th>Status</th><th>Scheduled</th><th>Published</th><th>Targets</th></tr></thead>
      <tbody>
      @forelse($posts as $post)
        <tr>
          <td>#{{ $post->id }}</td>
          <td style="max-width:420px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">{{ $post->content }}</td>
          <td><span class="badge badge-secondary">{{ $post->status }}</span></td>
          <td>{{ optional($post->scheduled_at)->format('Y-m-d H:i') }}</td>
          <td>{{ optional($post->published_at)->format('Y-m-d H:i') }}</td>
          <td>
            @foreach($post->targets as $t)
              <span class="badge badge-light text-capitalize">{{ $t->account->provider }}: {{ $t->status }}</span>
            @endforeach
          </td>
        </tr>
      @empty
        <tr><td colspan="6" class="text-center p-4">No posts yet.</td></tr>
      @endforelse
      </tbody>
    </table>
  </div>
  @if(method_exists($posts,'links'))
  <div class="card-footer">{{ $posts->links() }}</div>
  @endif
</div>
@endsection
