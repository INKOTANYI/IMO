<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Izere Mubyeyi Organization - Our Partners"/>
    <meta property="og:title" content="Our Partners - Izere Mubyeyi Organization NGO"/>
    <meta property="og:description" content="Learn about our partners and how they strengthen inclusion across Rwanda."/>
    <meta property="og:image" content="{{ asset('images/bg/Logo-izere.png') }}"/>
    <meta property="og:url" content="{{ url('/our-partners') }}"/>
    <title>Our Partners - Izere Mubyeyi Organization NGO</title>

    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/dist/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
      .card{border:none;border-radius:10px;box-shadow:0 6px 12px rgba(0,0,0,0.15);background:#fff}
      .card-body{padding:25px}
      .content-section h4{font-size:1.5rem;font-weight:800;color:#0052A5;margin-bottom:12px}
      .content-section p, .content-section ul{font-size:1.05rem;line-height:1.8;color:#333}
      .content-section ul{padding-left:24px}
    </style>
</head>
<body class="tm-enable-navbar-scrolltofixed tm-enable-navbar-always-visible-on-scroll">
<div id="wrapper" class="clearfix">
  @include('partials.header')

  <div id="main-content">
    <section class="section" data-tm-bg-color="#0052A5">
      <div class="container pt-40 pb-20"><div class="section-content"><div class="row"><div class="col-md-12 text-center">
        <h1 class="text-white display-4">Our Partners</h1>
        <p class="text-white lead">Together for Inclusive Impact</p>
      </div></div></div></div>
    </section>

    <section class="section">
      <div class="container pt-20 pb-20">
        <div class="section-content">
          <div class="row"><div class="col-lg-10 mx-auto">
            <div class="card"><div class="card-body">
              <div class="content-section">
                <h4>Our Partners</h4>
                <p>We are deeply thankful to our partners for their invaluable contributions, which have allowed us to scale up our impact, reach more children and families, and continuously improve our services.</p>
                <p>At Izere Mubyeyi Organization, we believe that partnership is at the heart of sustainable impact. Over the years, we have been fortunate to collaborate with a diverse network of government institutions, development agencies, private sector actors, civil society organizations; local, regional and international donors. These partnerships strengthen our programs, expand our reach, and ensure that children with disabilities and their families receive the support and opportunities they need.</p>
                <h5>The Role of Our Partners:</h5>
                <ul>
                  <li><strong>Capacity Building and Technical Support:</strong> Partners help us enhance the skills of our staff, teachers, therapists, and caregivers through specialized training, mentorship, and knowledge exchange.</li>
                  <li><strong>Resource Mobilization:</strong> By providing funding, equipment, learning materials, and assistive devices, partners enable us to deliver high-quality education, health care, and family empowerment programs.</li>
                  <li><strong>Infrastructure Expansion:</strong> Partners support the development and improvement of our facilities, including classrooms, therapy rooms, vocational workshops, and community spaces, creating safe, accessible, and stimulating environments for children, youth, and families.</li>
                  <li><strong>Policy and Advocacy Support:</strong> Many partners collaborate with us to influence national and local policies, promote inclusive practices, and ensure that disability rights are mainstreamed across sectors.</li>
                  <li><strong>Community Outreach:</strong> Through joint initiatives, partners help us identify children with disabilities in communities, raise awareness, and foster social acceptance and inclusion.</li>
                  <li><strong>Innovation and Program Development:</strong> Partners contribute technical expertise, innovative tools, and global best practices, allowing us to improve program quality and expand services to more children and families.</li>
                </ul>
                <h5>Join Us in Partnership:</h5>
                <p>We invite government agencies, private companies, civil society organizations, foundations, and international donors to join our mission. By partnering with Izere Mubyeyi Organization, you help create inclusive, supportive, and empowered communities where every child, regardless of ability; can thrive, families are resilient, and societies are stronger.</p>
              </div>
            </div></div>
          </div></div>
        </div>
      </div>
    </section>
  </div>

  @include('partials.footer-welcome')

  <script src="{{ asset('assets/dist/js/jquery.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/javascript-plugins-bundle.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/menuzord/js/menuzord.js') }}" defer></script>
  <script src="{{ asset('assets/dist/js/custom.js') }}" defer></script>
</div>
</body>
</html>
