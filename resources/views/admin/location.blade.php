
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Church Location</h2>
                    </div>
                </header>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
<h1 class="m-3">Create Location</h1>
                <div class="mt-5 m-5 row border pb-4">
                    <form method="post" action={{ route('admin.location') }} enctype="multipart/form-data">
                        @csrf
                      <div class="row">

                        <div class="col-lg-6 mt-5">
                            <label>Name:</label><br>
                            <input type="text" name="name" class="form-control" placeholder="e.g God is great">
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>Address:</label>
                            <input type="text" class="form-control" placeholder="22 kubwa abuja" name="address" required>
                        </div>

                        <div class="col-lg-6 mt-5">
                            <label>Phone:</label>
                            <input type="tel" class="form-control" name="phone" placeholder="+234" required>
                        </div>

                        <div class="col-12 mt-5">
                            <label>Images:</label><br>
                            <input type="file" name="images" required>
                        </div>

                        <div class="col">
                        <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                        </div>

                      </div>
                    </form>
                    </div>

                    <div class="container mt-5 m-5 ">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Images</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($location as $item)

                                <tr>
                                    <td>{{ $item-> id}}</td>
                                    <td>{{ $item-> name}}</td>
                                    <td>{{ $item-> address }}</td>
                                    <td>{{ $item-> phone }}</td>
                                    <td>{{ $item-> images }}</td>
                                    <td>
                                        <form action={{ route('admin.destroy_locaton', $item->id) }} method="post">
                                            @csrf
                                            @method('delete')
                                            <div class="d-flex">
                                            <button class="btn btn-sm btn-primary" type="submit">Delete</button>
                                            </div>

                                        </form>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>

                @include('admin.layout.footer')
