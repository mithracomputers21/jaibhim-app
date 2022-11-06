@extends('layouts.web')
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-zoom.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-thumbnail.css"/>
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
<div class="header d-flex flex-column align-items-center">
  <h1 class="display-6 mt-3 mb-0">புகைப்படங்கள்</h1>
</div>
<div class="container-sm">
  <div class="row justify-content-center">
    <div class="col col-md-10">
      <div class="gallery-container" id="animated-thumbnails-gallery">
        <!-- <a data-lg-size="1600-1067" class="gallery-item" data-src="assets/img/photos/087A3435-min.jpg">
          <img alt="layers of blue." class="img-responsive" src="assets/img/photos/087A3435-min.jpg" />
        </a> -->
        <a data-lg-size="1600-2400" data-pinterest-text="Pin it2" data-tweet-text="lightGallery slide  2" class="gallery-item" data-src="assets/img/photos/087A3435-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3435-min.jpg" />
        </a>
        <a data-lg-size="1600-2400" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3439-min.jpg">
          <img class="img-responsive" src="assets/img/photos/087A3439-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3445-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3445-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3461-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3461-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3498-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3498-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3501-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3501-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3589-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3589-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3593-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3593-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3666-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3666-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3741-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3741-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3800-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3800-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3815-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3815-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3830-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3830-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3843-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3843-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A3857-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A3857-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A4067-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A4067-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A4100-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A4100-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A4101-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A4101-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/087A4103-min.jpg" >
          <img class="img-responsive" src="assets/img/photos/087A4103-min.jpg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/1.jpeg" >
          <img class="img-responsive" src="assets/img/photos/1.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/2.jpeg" >
          <img class="img-responsive" src="assets/img/photos/2.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/3.jpeg" >
          <img class="img-responsive" src="assets/img/photos/3.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/4.jpeg" >
          <img class="img-responsive" src="assets/img/photos/4.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/5.jpeg" >
          <img class="img-responsive" src="assets/img/photos/5.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/6.jpeg" >
          <img class="img-responsive" src="assets/img/photos/6.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/7.jpeg" >
          <img class="img-responsive" src="assets/img/photos/7.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/8.jpeg" >
          <img class="img-responsive" src="assets/img/photos/8.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/9.jpeg" >
          <img class="img-responsive" src="assets/img/photos/9.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/10.jpeg" >
          <img class="img-responsive" src="assets/img/photos/10.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/11.jpeg" >
          <img class="img-responsive" src="assets/img/photos/11.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/12.jpeg" >
          <img class="img-responsive" src="assets/img/photos/12.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/13.jpeg" >
          <img class="img-responsive" src="assets/img/photos/13.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/14.jpeg" >
          <img class="img-responsive" src="assets/img/photos/14.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/15.jpeg" >
          <img class="img-responsive" src="assets/img/photos/15.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/16.jpeg" >
          <img class="img-responsive" src="assets/img/photos/16.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/17.jpeg" >
          <img class="img-responsive" src="assets/img/photos/17.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/18.jpeg" >
          <img class="img-responsive" src="assets/img/photos/18.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/19.jpeg" >
          <img class="img-responsive" src="assets/img/photos/19.jpeg" />
        </a>
        <a data-lg-size="1600-2398" data-pinterest-text="Pin it3" data-tweet-text="lightGallery slide  4" class="gallery-item" data-src="assets/img/photos/20.jpeg" >
          <img class="img-responsive" src="assets/img/photos/20.jpeg" />
        </a>
        
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/lightgallery.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/zoom/lg-zoom.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/thumbnail/lg-thumbnail.umd.js"></script>
<script>
jQuery("#animated-thumbnails-gallery")
  .justifiedGallery({
    captions: false,
    rowHeight: 180,
    margins: 5
  })
  .on("jg.complete", function () {
    window.lightGallery(
      document.getElementById("animated-thumbnails-gallery"),
      {
        autoplayFirstVideo: false,
        pager: false,
        galleryId: "nature",
        plugins: [lgZoom, lgThumbnail],
        mobileSettings: {
          controls: false,
          showCloseIcon: false,
          download: false,
          rotate: false
        }
      }
    );
  });

</script>
@endsection