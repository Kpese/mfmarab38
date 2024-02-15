
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1"> Create Church Activity</h2>
                    </div>
                </header>

                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="mt-5 m-5 row align-items-center">
                    <form method="post" action={{ route('admin.activity_create') }}>
                        @csrf
                      <div class="row">
                        <div class="col-lg-4 mt-5">
                            <label>Days:</label><br>
                           <textarea name="days" class="form-control" cols="43" rows="3" placeholder="e.g God is great" required style="outline: none"></textarea>
                        </div>

                        <div class="col-lg-4 mt-5">
                            <label>Program:</label>
                            <input type="text" name="program" class="form-control" placeholder="e.g sam, peace"  required>
                        </div>

                        <div class="col-lg-4 mt-5">
                            <label>Time:</label>
                            <input type="text" name="time" class="form-control" placeholder="pastor, choir" required>
                        </div>

                        <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </div>

                      </div>
                    </form>
                    </div>



                    @include('admin.layout.footer')
