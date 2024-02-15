
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
                <a class="btn btn-sm btn-primary m-3" href="{{ route('admin.department_create') }}">Create New Department</a>
                    <div class="container mt-5 m-5 justify-content-center d-flex">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Quotes</th>
                                    <th>Name</th>
                                    <th>Photos</th>
                                    <th>Office</th>
                                    <th>Created</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($church_department as $item)

                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->quotes }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->photo}}</td>
                                    <td>{{ $item->office }}</td>
                                    <td>{{ $item-> created_at -> diffForHumans()}}</td>
                                    <td>
                                        <form action={{ route('admin.destroy_depart', $item->id) }} method="post">
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
