@extends('layouts.web')
@section('content')

  <!-- ======= What We Do Section ======= -->
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
<section id="what-we-do" class="what-we-do">
      <div class="container">

        <div class="section-title">
          <h2>ஜெய்பீம் ஃபௌண்டேஷன்</h2>
          <p style="text-align:justify;">Jaibhim Foundation (ஜெய்பீம் அறக்கட்டளை) எழுச்சித்தலைவர் டாக்டர்.தொல்.திருமாவளவன் அவர்கள் 
            தலைமையின் கீழ் இயங்கும் ஓர் அறக்கட்டளை அமைப்பு. இவ்வமைப்பின் நிர்வாக பொறுப்பாளர் மற்றும் செயலாளராக 
            கௌதம சன்னா அவர்கள் இருக்கிறார். 90களில் உருவான அம்பேத்கரிய பேரெழுச்சியை  21ஆம் நூற்றாண்டில் மீண்டும் 
            உருவாக்கும் மாபெரும் முயற்சியினை முன்னெடுக்கும் செயல்திட்டத்தின் ஓர் அங்கம்தான் Jaibhim Foundation.
            சனாதன சக்திகளுக்கு மாபெரும் எதிர்ப்புக் கேடயமாய் அம்பேத்கரியம் ஒவ்வொரு கிராமத்திலும் / பகுதி / முகாம் ஆகியவற்றிற்குக்
            கொண்டுபோய் சேர்க்க வேண்டும் என்கின்ற பெரும் நோக்கத்தில் அம்பேத்கர் பவுண்டேஷன் என்கின்ற அறக்கட்டளை  உருவாக்கப்பட்டுள்ளது.
            இந்த அறக்கட்டளையின் செயல் திட்டத்தில் முதன்மை திட்டமாக ஜெய்பீம் 2.0 என்கின்ற திட்டமும், ஜெய்பீம் பதிப்பகமும் உருவாக்கப்பட்டுள்ளன.
          </p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <h4><a href="#">ஜெய்பீம் 2.0</a></h4>
              <p style="text-align:justify;">ஜெய்பீம் 2.0 செயல்திட்டம் தமிழகம் முழுவதும் ஒவ்வவொரு கிராமம் மற்றும் நகரப்பகுதிகளில் உள்ள மக்களிடையே அம்பேத்கரின் சிந்தனைகளைக் கொண்டு சேர்க்கும் மாபெரும் கனவுச் செயல்திட்டமாகும்...</p>
              <p><a href="{{ url('jaibhim-20-purpose') }}">மேலும் படிக்க</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <h4><a href="">அம்பேத்கரிய தூதுவராக இணைய</a></h4>
              <p style="text-align:justify;">புரட்சியாளர் அம்பேத்கர் மிகுந்த பாடுபட்டு பெற்றுத் தந்த இடஒதுக்கீட்டினால் பயன் அடைந்த அரசு ஊழியர்கள், அதிகாரிகள், மருத்துவர்கள், வழக்கறிஞர்கள், ஆசிரியர்கள் என சுமார் இரண்டு லட்சத்திற்கு மேற்பட்டோர் இருக்கின்றீர்கள்...</p>
              <p><a href="{{ url('joining-form') }}">மேலும் படிக்க</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <h4><a href="">அம்பேத்கரியம் 50</a></h4>
              <p style="text-align:justify;">பரந்து விரிந்த பெரும் அறிவின் சிகரமான புரட்சியாளர் அம்பேத்கரின் சிந்தனை முறை மற்றும் தத்துவத்தின் அடிப்படையில் துறைவாரியாக சுமார் 21,000 பக்கங்களோடு 50 தொகுதிகளாக மாபெரும் தொகுப்பாக கௌதம சன்னா ...</p>
              <p><a href="{{ url('ambedkariyam-volume-details') }}">மேலும் படிக்க</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <h4><a href="">உங்கள் படிப்பகமும் இணையலாம்</a></h4>
              <p style="text-align:justify;">ஏற்கனவே உங்கள் பகுதியில் செயல்பட்டு வரும் அம்பேத்கர்/பெரியார்/அயோத்திதாசர்/திருமா படிப்பகங்கள் இத்திட்டத்தில் இணைந்து தமிழக அளவில் மாபெரும் ஒருங்கிணைப்பை உருவாக்க முடியும். அதன் மூலம் அம்பேத்கரின் கனவை நனவாக்க முடியும். அம்பேத்கரின் கனவை நிறைவேற்ற விரும்பும் படிப்பகங்கள் இங்கு உள்ள விண்ணப்பத்தை நிரப்பி அனுப்புங்கள்....</p>
              <p><a href="{{ url('joining-form') }}">திட்டத்தில் இணைய.</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <h4><a href="">ஜெய் பீம் 2.0 நிகழ்வை உங்கள் பகுதியில் நடத்த விருப்பமா?</a></h4>
              <p style="text-align:justify;">ஜெய் பீம் 2.0 திட்டத்தில் 300 பேருக்குமேல்  இணைந்தால்  அந்த நிகழ்வில் எழுச்சித்தமிழர் அவர்கள் தலைமையேற்று அம்பேத்கரிய தூதுவர் சான்றிதழ்களை வழங்குவார்...</p>
              <p><a href="{{ url('ambedkariyam-library-open-procedures') }}">ஆம். விரும்புகிறேன்!</a></p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <h4><a href="">ஜெய்பீம் 2.0 திட்டத்தில் இணைந்தவர்கள் தங்கள் பெயர் & பகுதியை சரிபார்த்துக்கொள்ள </a></h4>
            <p style="text-align:justify;">ஜெய்பீம் 2.0 திட்டத்தில் இணைந்தவர்கள் தாங்கள் இணைந்த விவரத்தை உறுதிப்படுத்திக் கொள்ளவும், தாங்கள் தேர்ந்தெடுத்தப் பகுதி / முகாம் / அம்பேத்கர் படிப்பக முகவரியினை சரிபார்த்துக் கொள்ள இங்கே சொடுக்கவும்...</p>
              <p><a href="{{ url('ambedkariyam-ambassadors') }}">சரிபார்க்க</a></p>
            </div>
          </div>
        </div>

       

      </div>
    </section><!-- End What We Do Section -->
    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <!-- <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga</p>
        </div> -->

        <div class="row mt-2 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Chennai, Tamilnadu, India</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>jaibhim2info@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 8144798956, +91 9884326339<br>+91 8667755132, +91 9380601000</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <livewire:register-form>
@endsection