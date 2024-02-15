@include('main.layout.header')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image simple-breadcrumbs mode-2" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href={{ route('church.index') }}>Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!--Mailform-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 row-narrow-50">

              <div class="col-lg-6">
              <div class="pre-title">come visit us</div>
              <h2> How to find us</h2>
              <p class="text-sm">We invite you to come just as you are and be a part of our community of people who are striving together to discover God’s purpose and plan for their lives!</p>
              <ul class="contact-list offset-xl-50">
                <li>North Central Region 38 Arab Road, Kubwa, Abuja </li>
                <li><a class="phone ml-0" href="tel:#">+234 705 55 50 000</a></li>
              </ul>

            </div>

            <div class="col-lg-6">
              <div class="pre-title">Get in touch</div>
              <h2>We want to hear from you</h2>
              <p class="text-sm">If you have a question, a request, or a story to share with us, we’d love to hear from you!</p>
              <!--RD Mailform-->

              <form class="rd-mailform text-left contact-form"  method="post" action="">
                <div class="form-wrap">
                  <label class="form-label" for="contact-name">Enter your name:</label>
                  <input class="form-input"  type="text" name="name">
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-email">Enter your email:</label>
                  <input class="form-input" id="contact-email" type="email" name="email" >
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Your message:</label>
                  <textarea class="form-input" id="contact-message" name="message"></textarea>
                </div>
                <div class="form-button group-sm text-center text-lg-left">
                  <button class="shadow btn btn-icon btn-icon-right btn-primary btn-svg offset-xl-50 wow fadeInUp" type="submit"><span class="svg-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewbox="0 0 18 10" fill="#fff">
                        <path d="M13 10V6H0V4H13V0L18 5L13 10Z" fill=""></path>
                      </svg></span><span>Send message</span></button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </section>
      {{-- <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon={{ url('assets/images/gmap_marker.png') }} data-icon-active={{ url('assets/images/gmap_marker_active.png') }} data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
          </ul>
        </div>
      </section> --}}

      @include('main.layout.footer')
