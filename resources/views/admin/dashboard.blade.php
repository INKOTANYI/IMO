@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Welcome</h3>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="icon"><i class="fas fa-user"></i></div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Photos</h3>
                <p>Manage gallery photos</p>
            </div>
            <div class="icon"><i class="fas fa-image"></i></div>
            <a href="{{ route('photos.index') }}" class="small-box-footer">Go <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection
