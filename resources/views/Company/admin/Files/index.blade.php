@extends('Company.admin.inc.main')
@section('main-container')
<main id="main" class="main">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid p-4">
                <div class="pagetitle">
                    <div class="d-flex justify-content-between">
                        <h1>Manage file</h1>
                        <a href="{{ route('file.create') }}" class="btn btn-primary btn-md "><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">add-file</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <section class="section">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-hover table-bordered table-lg table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.N</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($files as $file)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $file->title}}</td>
                                            <td><img src="{{asset('uploads/'.$file->img)}}" width="120px" height="100px" alt="no"></td>
                                            <td>
                                                <a href="{{ route('file.edit',$file->id) }}" class="btn btn-md btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{ route('file.show',$file->id) }}" class="btn btn-md btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <!-- Modal trigger button -->
                                                <button type="button" class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#modalId">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                                
                                                <!-- Modal Body -->
                                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                                <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalTitleId">Delete ??</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('file.destroy',$file->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <button type="submit" name="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <!-- Optional: Place to the bottom of scripts -->
                                                <script>
                                                    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                                
                                                </script>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    {{$files->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
</main>

@endsection