
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Church Upcoming Events</h2>
                    </div>
                </header>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="mt-5 m-5 row align-items-center">
                    <form method="post" action={{ route('admin.event') }} enctype="multipart/form-data">
                        @csrf
                      <div class="row">

                        <div class="col-12 mt-5">
                            <label>ID:</label><br>
                            <input type="text" name="id" required>
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


                    <div class="container mt-5 m-5 ">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Images</th>
                                    <th>Created</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($event as $item)

                                <tr>
                                    <td>{{ $item-> id}}</td>
                                    <td>{{ $item-> image }}</td>
                                    <td>{{ $item-> created_at -> diffForHumans()}}</td>
                                    <td>
                                        <form action={{ route('admin.destroy_event', $item->id) }} method="post">
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
