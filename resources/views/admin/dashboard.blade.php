
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
                                            <div><strong class="text-lg">{{ $church_sermon->count() }}</strong></div>
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
                                            <div class="number"><strong class="text-lg">{{ $church_department->count() }}</strong></div>
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
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Days of Activities</h6>
                                            </div>
                                            <div class="number"><strong class="text-lg">{{ $church_activity->count() }}</strong></div>
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
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Church Introduction</h6>
                                            </div>
                                            <div class="number"><strong class="text-lg">{{ $church_intro->count() }}</strong></div>
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
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Bible Verse</h6>
                                            </div>
                                            <div class="number"><strong class="text-lg">{{ $bible_verse->count() }}</strong></div>
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
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Church Location</h6>
                                            </div>
                                            <div class="number"><strong class="text-lg">{{ $church_location->count() }}</strong></div>
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
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Church Events</h6>
                                            </div>
                                            <div class="number"><strong class="text-lg">{{ $church_upcoming_event->count() }}</strong></div>
                                        </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                @include('admin.layout.footer')
