
@include('admin.layout.header')

            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Bible Verses</h2>
                    </div>
                </header>

                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="mt-5 m-5 row align-items-center">
                    <form method="post" action={{ route('admin.bible_verse') }}>
                        @csrf
                      <div class="row">
                        <div class="col-lg-6 mt-5 mb-2">
                            <label>Bible Texts:</label><br>
                           <textarea name="text" class="form-control" cols="43" rows="3" placeholder="e.g for God so love the world" required style="outline: none"></textarea>
                        </div>

                        <div class="col-lg-6 mt-5 mb-2">
                            <label>Bible Verses:</label>
                            <input type="text" class="form-control" placeholder="e.g john 3:16" name="verse" required>
                        </div>

                        <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </div>
                      </div>
                    </form>
                    </div>

                    <div class="container mt-5 m-5 ">

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Bible Texts</th>
                                    <th>Bible Verses</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bible as $item)

                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->bible_texts }}</td>
                                    <td>{{ $item->bible_verses }}</td>
                                    <td>
                                        <form action={{ route('admin.destroy_verse', $item->id) }} method="post">
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
