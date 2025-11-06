@php(/** Public Events List */)
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css"/>
  <style>
    body{background:#0e0f10;color:#e6e9ee}
    .page-hero{background:#0b2e29;border-bottom:3px solid #10b981;color:#e6e9ee}
    .card{background:#141619;border:1px solid #1f242b}
    .badge-date{background:#0b2e29;border:1px solid #10b981;color:#c9f6e5}
    a, a:hover{color:#10b981}
    .event-img{width:100%;height:180px;object-fit:cover;border-radius:.25rem}
  </style>
</head>
<body>
  <header class="page-hero py-4 mb-4">
    <div class="container">
      <h1 class="h3 mb-1">Events</h1>
      <p class="mb-0">Stay updated on our key events, including awareness campaigns, trainings, advocacy forums, and community celebrations.</p>
    </div>
  </header>

  <main class="container pb-5">
    <div class="row">
      @forelse($events as $event)
        @php($thumb = $event->image ? asset('storage/'.$event->image) : (optional($event->images->first())->image_path ? asset('storage/'.optional($event->images->first())->image_path) : null))
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 p-3">
            @if($thumb)
              <img src="{{ $thumb }}" alt="{{ $event->title }}" class="event-img mb-3">
            @endif
            <div class="d-flex justify-content-between align-items-start mb-2">
              <h2 class="h5 mb-0" style="line-height:1.25">{{ $event->title }}</h2>
              <span class="badge badge-date ml-2">{{ optional($event->date_time)->format('d M Y') }}</span>
            </div>
            <div class="text-muted small mb-2">
              <i class="fas fa-map-marker-alt mr-1"></i>{{ $event->location }}
            </div>
            <p class="mb-3" style="min-height:3.5em">{{ Str::limit($event->description, 120) }}</p>
            <div>
              <a class="btn btn-sm btn-outline-success" href="{{ route('public.events.show',$event->id) }}">
                View details <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12"><div class="alert alert-secondary">No events available at the moment. Please check back later.</div></div>
      @endforelse
    </div>
  </main>
</body>
</html>
