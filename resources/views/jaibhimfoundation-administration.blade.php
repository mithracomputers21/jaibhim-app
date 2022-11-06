@extends('layouts.web')
@section('styles')

@endsection
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="padding-top:70px;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner1">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner2">
      </div>
      <div class="carousel-item">
        <img src="assets/img/banner.jpg" class="d-block w-100" alt="banner3">
      </div>
    </div>
  </div>
<!-- ======= Team Section ======= -->
<section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>தலைமை நிர்வாகம்</h2>
          <!-- <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/thirumavalavan.jpg" alt="">
              <h4>தலைவர்</h4>
              <h3>முனைவர் தொல்.திருமாவளவன்</h3>
              <p style="font-style: normal;">
              இந்திய நாடாளுமன்ற உறுப்பினர், <br>தலைவர், விடுதலை சிறுத்தைகள் கட்சி, இந்தியா, <br>துணைத்தலைவர், தெற்காசிய தலித் நாடாளுமன்ற உறுப்பினர் கூட்டமைப்பு
              </p>
              <div class="social">
                <a href="https://twitter.com/thirumaofficial" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/thirumaofficial" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/gowthamasanna.jpg" alt="">
              <h4>ஒருங்கிணைப்பாளர் மற்றும் செயலர்</h4>
              <h3>கௌதம சன்னா</h3>
              <p style="font-style: normal;">
              துணைப் பொதுச்செயலாளர், விடுதலை சிறுத்தைகள் கட்சி, இந்தியா, <br>நிறுவனர் மற்றும் தலைமை ஒருங்கிணைப்பாளர், தமிழ்நாடு பௌத்தர்கள் சங்கம்
              </p>
              <div class="social">
                <a href="https://twitter.com/gowthama_sanna" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/g.sannah" target="_blank"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section -->

@endsection