
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Dashboard</h2>
                    </div>
                </header>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- Dashboard Counts Section-->
                <section class="pb-0">
                    <div class="container-fluid">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row gx-5 bg-white">
                                    <!-- Item -->
                                    <div class="col-xl-6 col-sm-6 py-4 border-lg-end border-gray-200">
                                        <div class="d-flex align-items-center">

                                            <div></div>
                                            <div class="icon flex-shrink-0 bg-violet">
                                                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                                    <use xlink:href="#user-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="d-flex gap-5">
                                            <div class="mx-3">
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Total Church Sermons</h6>
                                            </div>
                                            <div><strong class="text-lg">25</strong></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="col-xl-6 col-sm-6 py-4 border-lg-end border-gray-200">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-red">
                                                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                                    <use xlink:href="#survey-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="d-flex gap-4">
                                            <div class="mx-3">
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Church Head of Departments</h6>
                                            </div>
                                            <div class="number"><strong class="text-lg">70</strong></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Client Section-->
                <section class="pb-0">
                    <div class="container-fluid">
                        <div class="row gy-4">

                            <!-- Client Profile -->
                            <div class="col">
                                <div class="card mb-0">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        {{-- <div class="client-avatar mb-3"><img class="img-fluid rounded-circle shadow-0" src="img/avatar-2.jpg" alt="...">
                                            <div class="status bg-green"></div>
                                        </div> --}}
                                        <h3 class="display-5">Number of Posts</h3>
                                        <div class="row py-4 gy-3">
                                            <div class="col-4">
                                            <strong class="d-block fs-1">{{ $bible_verse->count() }}</strong>Bible Verse
                                        </div>
                                            <div class="col-4"><strong class="d-block fs-1">{{ $church_activity->count() }}</strong>Days of Activities</div>
                                            <div class="col-4"><strong class="d-block fs-1">{{ $church_sermon->count() }}</strong>Church Sermon</div>
                                            <div class="col-4"><strong class="d-block fs-1">{{ $church_location->count() }}</strong>Church Location</div>
                                            <div class="col-4"><strong class="d-block fs-1">{{ $church_department->count() }}</strong>Church Department</div>
                                            <div class="col-4"><strong class="d-block fs-1">{{ $church_upcoming_event->count() }}</strong>Church Events</div>
                                            <div class="col-4"><strong class="d-block fs-1">{{ $church_intro->count() }}</strong>Church Introduction</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                @include('admin.layout.footer')
