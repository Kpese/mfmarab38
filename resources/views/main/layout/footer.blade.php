<footer class="section footer-classic p-3" style="background-color: #afacace8" >
    <div class="footer-body">
        <div class="container">
            <div class="row justify-content-xl-between row-40 justify-content-lg-center">
                <div class="col-lg-6">
                    <div class="row row-20">
                        <div class="col-sm-4 col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-title">Info</div>
                            <ul class="nav-list">
                                <li><a href={{ route('church.about') }}>About Us</a></li>
                                <li><a href="{{ route('church.give') }}">Give</a></li>
                                <li><a href={{ route('church.contact') }}>Contacts</a></li>
                                <li><a href="{{ route('church.privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 inset-right-100 wow fadeInRight" data-wow-delay=".3s">
                    <div class="footer-title">Contact us</div>
                    @foreach ($church_contact as $item)
                    <ul class="contact-list">
                        <li>{{ $item -> address }} </li>
                        <li><span>Call us:</span><a class="phone" href="tel:#">{{ $item -> phone }}</a></li>
                    </ul>
                    @endforeach
                    {{-- <ul class="social-list">
                      <li><a href="#"><span class="icon fa fa-youtube-play"></span></a></li>
                      <li><a href="#"><span class="icon fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="icon fa fa-facebook-f"></span></a></li>
                      <li><a href="#"><span class="icon fa fa-rss"></span></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-aside">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 wow fadeInUp" data-wow-delay=".4s">
                    <p class="rights"><span>&copy;&nbsp;</span><span>{{now()->format('Y')}} </span>- MFM Region 38 Arab. All Rights Reserved</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="{{ asset('assets/js/core.min.js')}}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- coded by Drel-->
</body>
</html>
