@extends('layout.main')
@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
        <h1>Blogs</h1>
        <p class="mb-0">Hello, Welcome to my blogs. I write about new technologies in web development sectors. Here
          You will learn about the tips and tricks about web development</p>
        </div>
      </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Blogs</li>
      </ol>
      </div>
    </nav>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Blogs Section</h2>
      <div><span>Check Our</span> <span class="description-title">Blog Section</span></div>
    </div><!-- End Section Title -->

    {{-- bootstrap blogs start --}}
    <div class="container">
      <div class="row mt-n5">
      <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s"
        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img alt="img"
          src="{{ asset('assets\img\b1.jpg') }}"></div>
        <div class="blog-grid-text p-4">
          <h3 class="h5 mb-3"><a href="#!">Business tool for your customer</a></h3>
          <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          <div class="meta meta-style2">
          <ul>
            <li><a href="#!"><i class="fas fa-calendar-alt"></i> 10 Jul,
              <script>document.write(new Date().getFullYear())</script>2022
            </a></li>
            <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
            <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
          </ul>
          </div>

        </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".4s"
        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
        <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img alt="img"
          src="{{ asset('assets\img\b2.jpg') }}"></div>
        <div class="blog-grid-text p-4">
          <h3 class="h5 mb-3"><a href="#!">Growth your business strategy</a></h3>
          <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          <div class="meta meta-style2">
          <ul>
            <li><a href="#!"><i class="fas fa-calendar-alt"></i> 25 Jun,
              <script>document.write(new Date().getFullYear())</script>2022
            </a></li>
            <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
            <li><a href="#!"><i class="fas fa-comments"></i> 68</a></li>
          </ul>
          </div>

        </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".6s"
        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
        <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img alt="img"
          src="https://www.bootdey.com/image/480x480/00FFFF/000000"></div>
        <div class="blog-grid-text p-4">
          <h3 class="h5 mb-3"><a href="#!">Business people success master plan</a></h3>
          <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          <div class="meta meta-style2">
          <ul>
            <li><a href="#!"><i class="fas fa-calendar-alt"></i> 16 May,
              <script>document.write(new Date().getFullYear())</script>2022
            </a></li>
            <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
            <li><a href="#!"><i class="fas fa-comments"></i> 58</a></li>
          </ul>
          </div>

        </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".8s"
        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
        <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img alt="img"
          src="https://www.bootdey.com/image/480x480/00FFFF/000000"></div>
        <div class="blog-grid-text p-4">
          <h3 class="h5 mb-3"><a href="#!">Results professional report</a></h3>
          <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          <div class="meta meta-style2">
          <ul>
            <li><a href="#!"><i class="fas fa-calendar-alt"></i> 02 Apr,
              <script>document.write(new Date().getFullYear())</script>2022
            </a></li>
            <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
            <li><a href="#!"><i class="fas fa-comments"></i> 38</a></li>
          </ul>
          </div>

        </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay="1s"
        style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
        <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img alt="img"
          src="https://www.bootdey.com/image/480x480/00FFFF/000000"></div>
        <div class="blog-grid-text p-4">
          <h3 class="h5 mb-3"><a href="#!">Business strategy concept</a></h3>
          <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          <div class="meta meta-style2">
          <ul>
            <li><a href="#!"><i class="fas fa-calendar-alt"></i> 25 Mar,
              <script>document.write(new Date().getFullYear())</script>2022
            </a></li>
            <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
            <li><a href="#!"><i class="fas fa-comments"></i> 68</a></li>
          </ul>
          </div>

        </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay="1.2s"
        style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
        <div class="blog-grid">
        <div class="blog-grid-img position-relative"><img alt="img"
          src="https://www.bootdey.com/image/480x480/00FFFF/000000"></div>
        <div class="blog-grid-text p-4">
          <h3 class="h5 mb-3"><a href="#!">Business people meeting</a></h3>
          <p class="display-30">Exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          <div class="meta meta-style2">
          <ul>
            <li><a href="#!"><i class="fas fa-calendar-alt"></i> 10 Feb,
              <script>document.write(new Date().getFullYear())</script>2022
            </a></li>
            <li><a href="#!"><i class="fas fa-user"></i> User</a></li>
            <li><a href="#!"><i class="fas fa-comments"></i> 58</a></li>
          </ul>
          </div>

        </div>
        </div>
      </div>
      </div>
      <div class="row mt-6 wow fadeInUp" data-wow-delay=".6s"
      style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
      <div class="col-12">
        <div class="pagination text-small text-uppercase text-extra-dark-gray">
        <ul>
          <li><a href="#!"><i class="fas fa-long-arrow-alt-left me-1 d-none d-sm-inline-block"></i> Prev</a></li>
          <li class="active"><a href="#!">1</a></li>
          <li><a href="#!">2</a></li>
          <li><a href="#!">3</a></li>
          <li><a href="#!">Next <i class="fas fa-long-arrow-alt-right ms-1 d-none d-sm-inline-block"></i></a></li>
        </ul>
        </div>
      </div>
      </div>
    </div>
    {{-- bootstrap blogs end --}}

    </section><!-- /Starter Section Section -->


  </main>
@endsection