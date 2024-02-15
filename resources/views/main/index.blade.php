
@include('main.layout.header')

<!--Intro-->
@foreach ($church_intro as $item)

<section class="section section-lg section-intro" style="
background: url( {{ url('assets/images/intro/'.$item->background_image)  }} ) no-repeat;
background-size: cover;
min-height: 69.47917vw;
position: relative;
">
</section>

@endforeach
<!--Church days of activities-->
<section class="section section-lg bg-default">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="pre-title fs-5 wow fadeInLeft" data-wow-delay=".1s">church days of activities</div>


                <div class="row mb-0 d-flex">
                    @foreach ($church_activity as $item)
                    <div class="col-lg-6 col-md-4 col-sm-6 mb-2">
                        <h4>{{ $item -> days }}</h4>
                        <span>{{ $item -> program }}</span><br>
                        <span class="text-sm fs-6">{{ $item -> time }}</span>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

<!--Church Sermons-->
<section class="section section-lg bg-default">
    <div class="container">
        <div class="pre-title fs-5 wow fadeInLeft" data-wow-delay=".1s">Church Sermons (<span class="fs-6">click to download audio</span>)</div>
        {{-- {{ $item -> audio}} --}}
        <div class="row mt-3 d-flex">
            @foreach ($church_sermon as $item)
            <div class="col-md-6 col-lg-4 wow fadeInUp mb-4" data-wow-delay=".1s">
                <div class="post-classic">
                    <div class="post-classic__caption"><span class="post-info">{{ $item -> created_at ->diffForHumans() }} </span>
                       <div class="bg-gradient border shadow rounded-pill p-2"><a href= {{ url('assets/audio/'. $item -> audio) }} download>🎵 {{ $item -> topic }}</a></div>
                        <p><em> Preached By {{ $item -> preached_by}} </em></p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
        {{ $church_sermon->links()}}
        </div>
    </div>
</section>


<!--bible verse-->

<section class="section ">
    <div class="container">
        <div class="pre-title fs-5 wow fadeInLeft mb-3" data-wow-delay=".1s">God's Words</div>

            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <p class="fw-bold fs-4">The lord is my shephard, i shall not want.</p>
                        <span class="text-danger">(Psalm 23:1)</span>
                        </div>
                        @foreach ($bible_verse as $item)
                        <div class="carousel-item">
                            <p class="fw-bold fs-4">{{ $item->bible_texts}}</p>
                            <span class="text-danger">({{ $item-> bible_verses}})</span>
                            </div>
                        @endforeach

                    <!-- Add more carousel items as needed -->
                </div>
            </div>
    </div>
</section>



<!--UPCOMING EVENTS-->
<section class="section section-lg bg-default">
    <div class="container">
        <div class="pre-title fs-5 wow fadeInLeft" data-wow-delay=".1s">Church Upcoming Events</div>

        @foreach ($church_upcoming_event as $item)
        <div class="p-2">
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src={{ url('assets/images/church_event/'.$item->image)  }} class="d-block upcoming img-fluid" alt="Image 1">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


<!--Head of Departments-->
<div class="pre-title ms-4 fs-5 wow fadeInLeft" data-wow-delay=".1s">Head of Departments</div>
<section class="section section-md m-4 bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="swiper-container swiper-slider swiper-style-1" data-swiper='{"autoplay":{"delay":4567},"effect":"fade"}'>
                    <div class="swiper-wrapper">
                        @foreach ($church_department as $item)
                        <div class="swiper-slide context-dark ">
                            <div class="swiper-slide-caption text-center text-lg-left ">
                                <div class="row justify-content-center ">
                                    <div class="col-xl-10 p-xl-0 ">
                                        <div class="row justify-content-center row-20 align-items-center flex-column flex-md-row">
                                            <div class="col-lg-3 p-xl-0"><img src={{url('assets/images/department/'.$item->photo)  }} alt="" width="280" height="349" />
                                            </div>
                                            <div class="col-lg-9 inset-left-110">
                                                <div class="h3 bg-primary">“{{ $item->quotes }}”</div>
                                                <div class="shadow px-2 mt-4">
                                                    <div class="author">{{ $item -> name }}</div>
                                                <div class="author-position">{{ $item -> office }}</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--Swiper Pagination-->
                    <div class="swiper-pagination"></div>
                    <!--Swiper Navigation-->
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewbox="0 0 18 10" fill="">
                            <path d="M5 10V6H18V4H5V0L0 5L5 10Z" fill=""></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewbox="0 0 18 10" fill="">
                            <path d="M5 10V6H18V4H5V0L0 5L5 10Z" fill=""></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Locations-->
<section class="section section-lg bg-default mb-2">
    <div class="container">
        <div class="pre-title text-center wow fadeInUp" data-wow-delay=".1s">Where to find us</div>
        <h2 class="wow fadeInUp text-center" data-wow-delay=".2s">Our Churches</h2>

        <div class="row row-narrow-50 row-40 row-xl">
            @foreach ($church_location as $item)
            <div class="col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="thumbnail-classic"><a class="thumbnail-classic__media" href="#"><img src={{url('assets/images/church_location/'.$item->images)  }} alt="" width="610" height="458" /></a>
                    <h3><a href="#">{{ $item -> name }}</a></h3>
                    <a class="location" href="#">
                    <span class="icon mdi-map-marker mdi"></span>{{ $item->address }}
                </a>
                </div>
            </div>
            {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="thumbnail-classic"><a class="thumbnail-classic__media" href="#"><img src="{{ asset('assets/images/home-4-610x458.jpg') }}" alt="" width="610" height="458" /></a>
                    <h3><a href="#">Mountain Of Fire And Miracles Ministries</a></h3><a class="location" href="#"><span class="icon mdi-map-marker mdi"></span>North Central Region 38 Arab Road, Kubwa, Abuja </a>
                </div>
            </div> --}}
            @endforeach
        </div>

    </div>
</section>
{{-- <section class="section section-vide section-lg video-wrap vide" data-vide-bg={{ url('assets/video/video') }}>
<div class="container text-center context-dark">
    <div class="h1">Attend the next church event</div>
    <p class="text-sm">See you at the sunday sermon</p>
</div>
</section> --}}


@include('main.layout.footer')

