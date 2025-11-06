@php(/** Public Event Detail */)
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $event->title }} — Event</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css"/>
  <style>
    body{background:#0e0f10;color:#e6e9ee}
    .page-hero{background:#0b2e29;border-bottom:3px solid #10b981;color:#e6e9ee}
    .card{background:#141619;border:1px solid #1f242b}
    a, a:hover{color:#10b981}
    .gallery img{width:100%;height:160px;object-fit:cover;border-radius:.25rem}
  </style>
</head>
<body>
  <header class="page-hero py-4 mb-4">
    <div class="container">
      <a href="{{ route('public.events.index') }}" class="small"><i class="fas fa-arrow-left mr-1"></i>Back to events</a>
      <h1 class="h3 mb-1">{{ $event->title }}</h1>
      <div class="text-muted">
        <i class="fas fa-calendar-alt mr-1"></i>{{ optional($event->date_time)->format('d M Y, H:i') }}
        <span class="mx-2">•</span>
        <i class="fas fa-map-marker-alt mr-1"></i>{{ $event->location }}
      </div>
    </div>
  </header>

  <main class="container pb-5">
    <div class="row">
      <div class="col-lg-8 mb-4">
        <div class="card p-4 mb-4">
          @if($event->image)
            <img src="{{ asset('storage/'.$event->image) }}" alt="{{ $event->title }}" class="mb-3 w-100" style="max-height:380px;object-fit:cover;border-radius:.25rem;">
          @endif
          <article class="lead" style="white-space:pre-line;">{{ $event->description }}</article>
        </div>

        @if($event->images && $event->images->count())
        <div class="card p-4">
          <h2 class="h5 mb-3">Gallery</h2>
          <div class="row gallery">
            @foreach($event->images as $img)
              <div class="col-sm-6 col-md-4 mb-3">
                <img src="{{ asset('storage/'.$img->image_path) }}" alt="">
              </div>
            @endforeach
          </div>
        </div>
        @endif
      </div>

      <aside class="col-lg-4">
        <div class="card p-4 mb-3">
          <h2 class="h6">Details</h2>
          <ul class="list-unstyled mb-0 small">
            <li class="mb-1"><i class="fas fa-calendar-alt mr-1"></i> {{ optional($event->date_time)->format('l, d M Y') }}</li>
            <li class="mb-1"><i class="fas fa-clock mr-1"></i> {{ optional($event->date_time)->format('H:i') }}</li>
            <li class="mb-1"><i class="fas fa-map-marker-alt mr-1"></i> {{ $event->location }}</li>
          </ul>
        </div>
      </aside>
    </div>
  </main>
</body>
</html>
