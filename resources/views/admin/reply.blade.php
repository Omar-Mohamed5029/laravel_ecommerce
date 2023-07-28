@extends('front.layouts.app')
@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Replying User</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- <nav>
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>
  </nav> -->
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
   
  <!-- <a href="{{url('/mymessage')}}"> <h2>Your Message</h2></a>  -->
    <!-- <div>
      <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>End Google Maps -->

    

      <div class="col-lg-8">
        <form action="{{route('allmessages.store')}}" enctype="multipart/form-data" method="POST" role="form" class="php-email-form">
        @csrf
        <input type="hidden" value="{{$user_email}}" name="sendto">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" value="{{$user_email}}" >
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <br>
        

      </div>

    

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->


@endsection