@extends('layout.main_layout');

@section('content')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image bg-none" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
          <div class="h1 breadcrumbs-custom-title">Our Departments</div>
          <p class="breadcrumbs-custom-caption">Here are the various departments in our church </p>
          <ul class="breadcrumbs-custom-path">
            <li><a href={{ route('church.index') }}>Home</a></li>
            {{-- <li class="active">Ministries</li> --}}
          </ul>
        </div>
      </section>
      <section class="section-lg section bg-default">
        <div class="container">
          <div class="row row-narrow-50 row-xl-100" data-lightgallery="group">
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".1s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-1-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-1-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Youth Department</div></a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-2-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-2-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Men’s Department</div></a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-4-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-4-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Women's Department</div></a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-5-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-5-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Children's Department</div></a>
            </div>
             <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-6-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-6-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Teens Department</div></a>
            </div>
         {{--   <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-6-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-6-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Chior</div></a>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s"><a class="gallery-thumbnail" href={{ url('assets/images/ministries-6-1200x800-original.jpg') }} data-lightgallery="item"><img src={{ url("assets/images/ministries-6-390x495.jpg") }} alt="" width="390" height="495"/>
                <div class="float-title">Bible study</div></a>
            </div> --}}
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="pre-title text-center wow fadeInUp" data-wow-delay=".1s">Get Closer to God</div>
          <h2 class="wow fadeInUp text-center" data-wow-delay=".2s">Latest sermons</h2>
          <div class="row row-narrow-50 row-40 row-xl">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="thumbnail-classic"><a class="thumbnail-classic__media" href="#"><img src={{ url('assets/images/thumbnail-classic-3-610x458.jpg') }} alt="" width="610" height="458"/></a>
                <h3><a href="#">Good Gifts</a></h3><span class="subtitle-sm">Pastor James Williams | Matthew 7:7-11</span>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
              <div class="thumbnail-classic"><a class="thumbnail-classic__media" href="#"><img src={{ url('assets/images/thumbnail-classic-4-610x458.jpg') }} alt="" width="610" height="458"/></a>
                <h3><a href="#">Disciples Love Like Jesus</a></h3><span class="subtitle-sm">Pastor Edward Green | John 13:35</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      @endsection
