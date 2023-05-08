@extends('Company.admin.inc.main')
@section('main-container')
    <main id="main" class="main">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid p-4">

                    <div class="pagetitle">
                        <div class="d-flex justify-content-between">
                            <h1>Show</h1>
                            <a href="{{ route('pricing.index') }}" class="btn btn-primary btn-md ">Back</a>
                        </div>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">show-pricing</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <section class="section">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('pricing.store', $pricings->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Plan</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" disabled name="plan"
                                                        value="{{ $pricings->plan }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Cost</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" disabled name="cost"
                                                        value="{{ $pricings->cost }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Feature_1</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" disabled name="feature_1"
                                                        value="{{ $pricings->feature_1 }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Feature_2</label>
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" disabled name="feature_2"
                                                        value="{{ $pricings->feature_2 }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">feature_3</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled name='feature_3'>{{ $pricings->feature_3 }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Feature_4</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled name='feature_4'>{{ $pricings->feature_4 }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Feature_5</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled name='feature_5'>{{ $pricings->feature_5 }}</textarea>
                                                </div>
                                            </div>
                                        </div>


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
