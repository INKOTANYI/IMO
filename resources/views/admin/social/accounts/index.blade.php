@extends('layouts.app')
@section('title','Social Accounts')
@section('content')
@if(session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif
@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <span>Connected Accounts</span>
    <div>
      <a href="{{ route('admin.social.accounts.meta.redirect') }}" class="btn btn-sm btn-primary">
        <i class="fas fa-plug mr-1"></i> Connect Facebook / Instagram
      </a>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped m-0">
      <thead><tr><th>Provider</th><th>Name</th><th>Username</th><th>Status</th><th></th></tr></thead>
      <tbody>
      @forelse($accounts as $acc)
        <tr>
          <td class="text-capitalize">{{ $acc->provider }}</td>
          <td>{{ $acc->name }}</td>
          <td>{{ $acc->username }}</td>
          <td><span class="badge badge-{{ $acc->status==='active'?'success':'secondary' }}">{{ $acc->status }}</span></td>
          <td class="text-right">
            @if($acc->status==='active')
            <form method="post" action="{{ route('admin.social.accounts.disconnect',$acc) }}">
              @csrf
              <button class="btn btn-sm btn-outline-danger">Disconnect</button>
            </form>
            @endif
          </td>
        </tr>
      @empty
        <tr><td colspan="5" class="text-center p-4">No accounts connected.</td></tr>
      @endforelse
      </tbody>
    </table>
  </div>
</div>

@if(session('meta_pages'))
<div class="card mt-3">
  <div class="card-header">Select a Facebook Page to Connect</div>
  <div class="card-body">
    <form method="post" action="{{ route('admin.social.accounts.meta.connect_page') }}">
      @csrf
      <div class="form-group">
        <label for="page_id">Page</label>
        <select id="page_id" name="page_id" class="form-control" required>
          @foreach(session('meta_pages', []) as $p)
            <option value="{{ $p['id'] }}">{{ $p['name'] ?? $p['id'] }}</option>
          @endforeach
        </select>
      </div>
      <button class="btn btn-success">Connect Selected Page</button>
    </form>
    <small class="text-muted d-block mt-2">If your Instagram Business account is linked to this Page, it will be connected automatically.</small>
  </div>
</div>
@endif
@endsection
