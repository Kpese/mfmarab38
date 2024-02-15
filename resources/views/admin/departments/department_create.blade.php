
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Church Head of Departments</h2>
                    </div>
                </header>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="mt-5 m-5 row align-items-center">
                    <p class="mb-0 display-6">CREATE DEPARTMENT</p>
                    <form method="post" action={{ route('admin.department_create') }} enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-lg-4 mt-3">
                            <label>Quotes:</label><br>
                           <textarea name="quote" class="form-control" cols="43" rows="3" placeholder="e.g God is great" required style="outline: none"></textarea>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="e.g sam, peace" name="name" required>
                        </div>

                        <div class="col-lg-4 mt-3">
                            <label>Office:</label>
                            <input type="text" class="form-control" name="office" placeholder="pastor, choir" required>
                        </div>

                        <div class="col-12 mt-5">
                            <label>Images:</label><br>
                            <input type="file" name="image" required>
                        </div>

                        <div class="col">
                        <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                        </div>

                      </div>
                    </form>
                    </div>
                    <hr>
                    <hr>


                    @include('admin.layout.footer')
