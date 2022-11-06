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
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>காணொளிகள்</h2>
          <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p> -->
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/TyMfhwfHGSM?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/p6CMGXq9S6o?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/1IQItLSqRV8?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/z5MFQf-GVAg?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
           <div class="col-md-6 mt-4">
            <div class="icon-box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/D0g2Rc-uEbk?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-6 mt-4">
            <div class="icon-box">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="100%" height="400" src="https://www.youtube.com/embed/TyMfhwfHGSM?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->
@endsection

@section('scripts')

@endsection