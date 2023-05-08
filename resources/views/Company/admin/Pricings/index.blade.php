@extends('Company.admin.inc.main')
@section('main-container')
    <main id="main" class="main">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid p-4">
                    <div class="pagetitle">
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="d-flex justify-content-between">
                            <h1>Index Pricing</h1>
                            <a href="{{ route('pricing.create') }}" class="btn btn-primary btn-md "><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </div>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">manage-pricing</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <section class="section">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <table
                                        class="table table-striped table-hover table-bordered table-lg table-responsive-lg">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.N</th>
                                                <th scope="col">Plan</th>
                                                <th scope="col">Cost</th>
                                                <th scope="col">Feature_1</th>
                                                <th scope="col">Feature_2</th>
                                                <th scope="col">Feature_3</th>
                                                <th scope="col">Feature_4</th>
                                                <th scope="col">Feature_5</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pricings as $pricing)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $pricing->plan }}</td>
                                                    <td>{{ $pricing->cost }}</td>
                                                    <td>{{ $pricing->feature_1 }}</td>
                                                    <td>{{ $pricing->feature_2 }}</td>
                                                    <td>{{ $pricing->feature_3 }}</td>
                                                    <td>{{ $pricing->feature_4 }}</td>
                                                    <td>{{ $pricing->feature_5 }}</td>
                                                    <td>
                                                        <a href="{{ route('pricing.edit', $pricing->id) }}"
                                                            class="btn btn-md btn-primary"><i class="fa fa-pencil"
                                                                aria-hidden="true"></i></a>
                                                        <a href="{{ route('pricing.show', $pricing->id) }}"
                                                            class="btn btn-md btn-secondary"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                        <!-- Modal trigger button -->
                                                        <button type="button" class="btn btn-danger btn-md"
                                                            data-bs-toggle="modal" data-bs-target="#modalId">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>

                                                        <!-- Modal Body -->
                                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                                        <div class="modal fade" id="modalId" tabindex="-1"
                                                            data-bs-backdrop="static" data-bs-keyboard="false"
                                                            role="dialog" aria-labelledby="modalTitleId"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalTitleId">Delete ??
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <form
                                                                            action="{{ route('pricing.destroy', $pricing->id) }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" name="submit"
                                                                                class="btn btn-danger"><i
                                                                                    class="fa-solid fa-trash-can"></i>
                                                                            </button>
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
                                        {{ $pricings->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </main>
    <script>
        function firstFunction() {
            var x = document.querySelector('input[name=img]:checked').value;
            document.getElementById('imagebox').value = x; // use .innerHTML if we want data on label
        }
    </script>
@endsection
