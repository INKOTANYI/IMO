<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - Izere Mubyeyi Organization</title>

  <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
  <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dist/css/style-main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/dist/css/responsive.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .tm-section-title { font-weight: 900; letter-spacing: .2px; }
    .tm-subtitle { color: #334155; }
    .gallery-card { transition: transform .2s ease, box-shadow .2s ease; }
    .gallery-card:hover { transform: translateY(-4px); box-shadow: 0 16px 30px rgba(0,0,0,0.18); }
    .overlay { background: linear-gradient(180deg, rgba(0,0,0,0) 40%, rgba(0,0,0,.55) 100%); }
    .chip { backdrop-filter: blur(6px); background: rgba(0,0,0,.45); }
  </style>
</head>
<body class="tm-enable-navbar-scrolltofixed tm-enable-navbar-always-visible-on-scroll">
<div id="wrapper" class="clearfix">
  @include('partials.header')

  <main id="main-content">
    <section class="py-10 sm:py-12" style="background-color:#0052A5;">
      <div class="container">
        <div class="text-center">
          <h1 class="text-white text-3xl sm:text-4xl font-extrabold tm-section-title">Photo Gallery</h1>
          <p class="text-white/90 mt-2 tm-subtitle">Moments from our programs, outreach and community</p>
        </div>
      </div>
    </section>

    <section class="py-10">
      <div class="container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
          @php
            $images = [
              'images/bg/izere1.jpg',
              'images/bg/izere2.jpg',
              'images/bg/izere3.jpg',
              'images/bg/izere4.jpg',
              'images/bg/event-1-1024x576.jpg',
              'images/bg/event-2-1024x683.jpg',
              'images/bg/event-4.jpg',
              'images/bg/event-5-1024x683.jpg',
              'images/bg/ecd2.jpg',
              'images/bg/health2.jpg',
              'images/bg/health3.jpg',
              'images/bg/health5-follow-up-1.jpg',
              'images/bg/photo1-updates-1.jpg',
              'images/bg/photo-updates-5-1.jpg',
              'images/bg/photo-updates-6-1.jpg',
              'images/bg/gatagara-event-2-1024x771.jpg',
              'images/bg/children-eating-at-school-2-1.jpg',
              'images/bg/a-child-in-rehabilitation-1-1024x768.jpg',
              'images/bg/P1110133-1024x768.jpg',
              'images/bg/P1110147-1024x768 (1).jpg',
              'images/bg/P1110158-1024x768.jpg',
              'images/bg/training1.jpg',
              'images/bg/training1 (1).jpg',
              'images/bg/culture3.jpg',
            ];
          @endphp

          @foreach($images as $img)
            <div class="group relative overflow-hidden rounded-xl bg-white shadow gallery-card">
              <img src="{{ asset($img) }}" alt="Gallery photo" class="h-60 w-full object-cover object-center transition-transform duration-300 group-hover:scale-105" loading="lazy">
              <div class="pointer-events-none absolute inset-0 overlay"></div>
              <div class="absolute inset-x-0 bottom-0 p-3 flex items-end justify-between">
                <span class="chip inline-flex items-center text-xs text-white px-2 py-1 rounded-md">
                  <i class="far fa-image mr-1"></i> IMO
                </span>
                <button class="pointer-events-auto view-btn inline-flex items-center text-xs font-semibold text-white chip px-3 py-1 rounded-md" data-src="{{ asset($img) }}" data-index="{{ $loop->index }}">
                  View
                </button>
              </div>
            </div>
          @endforeach
        </div>

        <div class="text-center mt-10">
          <a href="{{ route('donate') }}" class="inline-flex items-center gap-2 rounded-full bg-amber-400 text-slate-900 font-extrabold px-5 py-2 shadow hover:shadow-lg hover:-translate-y-0.5 transition">
            <i class="fas fa-heart"></i>
            Support Our Work
          </a>
        </div>
      </div>
    </section>
  </main>

  @include('partials.footer-welcome')
</div>

<dialog id="lightbox" class="rounded-xl p-0 backdrop:bg-black/70 w-[92vw] max-w-5xl">
  <div class="relative">
    <button type="button" id="lightboxClose" class="absolute top-3 right-3 z-20 inline-flex items-center justify-center w-9 h-9 rounded-full bg-black/60 text-white hover:bg-black/80">
      <i class="fas fa-times"></i>
    </button>
    <button type="button" id="lightboxPrev" aria-label="Previous" class="absolute left-3 top-1/2 -translate-y-1/2 z-20 inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/60 text-white hover:bg-black/80">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button type="button" id="lightboxNext" aria-label="Next" class="absolute right-3 top-1/2 -translate-y-1/2 z-20 inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/60 text-white hover:bg-black/80">
      <i class="fas fa-chevron-right"></i>
    </button>
    <img id="lightboxImg" src="" alt="Expanded image" class="w-full h-auto max-h-[82vh] object-contain bg-black">
  </div>
</dialog>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const dlg = document.getElementById('lightbox');
    const img = document.getElementById('lightboxImg');
    const closeBtn = document.getElementById('lightboxClose');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');

    const buttons = Array.from(document.querySelectorAll('.view-btn'));
    const sources = buttons.map(b => b.getAttribute('data-src'));
    let current = -1;
    let timer = null;
    const INTERVAL_MS = 4000; // change slide every 4s

    function startAutoplay() {
      stopAutoplay();
      timer = setInterval(() => { showNext(); }, INTERVAL_MS);
    }

    function stopAutoplay() {
      if (timer) { clearInterval(timer); timer = null; }
    }

    function openAt(index) {
      if (!sources.length) return;
      current = (index + sources.length) % sources.length; // wrap around
      img.src = sources[current];
      if (typeof dlg.showModal === 'function') dlg.showModal(); else dlg.setAttribute('open', '');
      startAutoplay();
    }

    function closeDlg() {
      stopAutoplay();
      img.src = '';
      if (typeof dlg.close === 'function') { try { dlg.close(); } catch(_) { dlg.removeAttribute('open'); } }
      else { dlg.removeAttribute('open'); }
    }

    function showNext() { if (sources.length) openAt(current + 1); }
    function showPrev() { if (sources.length) openAt(current - 1); }

    buttons.forEach(btn => {
      btn.addEventListener('click', () => {
        const idx = parseInt(btn.getAttribute('data-index')) || 0;
        openAt(idx);
      });
    });

    nextBtn.addEventListener('click', showNext);
    prevBtn.addEventListener('click', showPrev);
    closeBtn.addEventListener('click', closeDlg);

    dlg.addEventListener('click', (e) => { if (e.target === dlg) closeDlg(); });
    dlg.addEventListener('mouseenter', stopAutoplay);
    dlg.addEventListener('mouseleave', () => { if (dlg.open || dlg.hasAttribute('open')) startAutoplay(); });
    dlg.addEventListener('close', stopAutoplay);
    document.addEventListener('keydown', (e) => {
      if (!(dlg.open || dlg.hasAttribute('open'))) return;
      if (e.key === 'Escape') closeDlg();
      if (e.key === 'ArrowRight') showNext();
      if (e.key === 'ArrowLeft') showPrev();
    });
  });
</script>
</body>
</html>
