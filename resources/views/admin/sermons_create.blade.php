
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Church Sermons</h2>
                    </div>
                </header>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif


                <div class="mt-5 m-5 row align-items-center">
                     <h4>ADD SERMON</h4>
                    <form method="post" action={{ route('admin.sermon') }} enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="col-lg-4 mt-5">
                            <label>Topic:</label><br>
                            <input type="text" class="form-control" placeholder="e.g love is God" name="topic" required>
                        </div>

                        <div class="col-lg-4 mt-5">
                            <label>Preached_by:</label>
                            <input type="text" class="form-control" placeholder="e.g Pastor Emma" name="preach" required>
                        </div>

                        <div class="col-12 mt-5">
                            <label>Audio:</label><br>
                            <input type="file" name="audio" required>
                            @error('audio')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col">
                        <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                        </div>

                      </div>
                    </form>
                    </div>


@include('admin.layout.footer')
