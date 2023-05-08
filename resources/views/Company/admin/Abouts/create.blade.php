@extends('Company.admin.inc.main')
@section('main-container')
    <main id="main" class="main">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid p-4">

                    <div class="pagetitle">
                        <div class="d-flex justify-content-between">
                            <h1>Add</h1>
                            <a href="{{ route('about.index') }}" class="btn btn-primary btn-md "><i class="fa fa-bars"
                                    aria-hidden="true"></i></a>
                        </div>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">add-about</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <section class="section">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">top_title</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" name="top_title">
                                                    @error('top_title')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">title</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" name="title">
                                                    @error('title')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Top_description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='top_desc'></textarea>
                                                    @error('top_desc')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='description'></textarea>
                                                    @error('description')
                                                        <small>{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                    </form>
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
