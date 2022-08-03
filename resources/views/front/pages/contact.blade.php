@extends('front.layout.app')
@section('title',dataJson()['contact']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['contact']['page-name'])
    
    <!-- End Main Header Page -->

    <section class="page-contact">
      <div class="container">
        <div class="contact__info">
          <h4 class="mb-5 border-bottom pb-3">Contact Information</h4>
          <div class="row"> 
            <div class="col-md-6 col-lg-3 mb-5"> <a class="contact__info-box" href="#"> <span class="contact__info-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="contact__info-txt"> {{dataJson()['contact']['contact-information']['location']}}</span></a></div>
            <div class="col-md-6 col-lg-3 mb-5"> <a class="contact__info-box" href="#"> <span class="contact__info-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="contact__info-txt">{{dataJson()['contact']['contact-information']['phone']}}</span></a></div>
            <div class="col-md-6 col-lg-3 mb-5"> <a class="contact__info-box" href="#"> <span class="contact__info-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="contact__info-txt"> {{dataJson()['contact']['contact-information']['email']}}</span></a></div>
            <div class="col-md-6 col-lg-3 mb-5"> <a class="contact__info-box" href="{{dataJson()['contact']['contact-information']['site']}}"> <span class="contact__info-icon"><i class="fa fa-globe" aria-hidden="true"></i></span><span class="contact__info-txt">{{dataJson()['contact']['contact-information']['site']}}</span></a></div>
          </div>
        </div>
        <div class="contact__form">
          <div class="row"> 
            <div class="col-md-6 mb-4"> 
              <div class="map-google h-100 w-100"> 
                <iframe title="Google Map" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(MAS)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              </div>
            </div>
            <div class="col-md-6 mb-4"> 
              <h4 class="mb-4">Contact Us</h4>
              <form class="cmxform" id="contact">
                @csrf
                <div class="form-group">
                  <input class="form-control border mb-3 p-3" type="text" placeholder="Your Name" name="name" id="cname">
                </div>
                <div class="form-group">
                  <input class="form-control border mb-3 p-3" type="email" placeholder="Your Email" name="email" id="cemail">
                </div>
                <div class="form-group">
                  <input class="form-control border mb-3 p-3" type="text" placeholder="Your Subject" id="csubject" name="subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control border mb-3 p-3" rows="3" placeholder="Message..." name="message" id="cmessage"></textarea>
                </div>
                <div class="form-group">
                  <button class="btn main-btn px-5 py-3 submit" type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
                  @section('jsfiles')
                  @include('front.js.ajax.contact.contactus_send')

                  @endsection
    @endsection