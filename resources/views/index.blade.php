@extends('layout.main')
@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

    <img src="{{ asset('assets/img/hero-bg.png') }}" alt="" data-aos="fade-in">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h2>Imtiaz Habib</h2>
      <p>I'm Full Stack Web  Developer. I work on <span class="typed" data-typed-items="WordPress(Elementor), WordPress(Theme Develeopment ), php with laravel"></span>
        <span class="typed-cursor typed-cursor--blink"></span></p>
      <div class="social-links">
      <a href="https://www.youtube.com/@imtiazhabib5029/videos"><i class="bi bi-youtube"></i></a>
      <a href="https://www.facebook.com/habib.sinha"><i class="bi bi-facebook"></i></a>
      <a href="https://github.com/ImtiazHabib"><i class="bi bi-github"></i></a>
      <a href="https://www.linkedin.com/in/imtiaz-habib/"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    </section><!-- /Hero Section -->

  </main>
@endsection