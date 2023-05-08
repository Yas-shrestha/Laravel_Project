@extends('Company.admin.inc.main')
@section('main-container')
<main id="main" class="main">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid p-4">

                <div class="pagetitle">
                    <div class="d-flex justify-content-between">
                        <h1>Show</h1>
                        <a href="{{ route('feature.index') }}" class="btn btn-primary btn-md ">Back</a>
                    </div>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">show-feature</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <section class="section">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('feature.store',$features->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                   @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Logo</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled name="logo"  value="{{$features->logo}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled name="title"  value="{{$features->title}}">
                                            </div>
                                        </div>

                                    </div>
                                    <a class="btn btn-primary" href="{{route('feature.index')}}">Back</a>
                                    {{-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> --}}
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