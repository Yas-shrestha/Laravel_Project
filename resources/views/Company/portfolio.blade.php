@extends('layouts.main')
@section('middle')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portfolio</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('uploads/' . $portfolio->img) }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $portfolio->title }}</h4>
                                <p>{{ $portfolio->description }}</p>
                                <a href="{{ asset('uploads/' . $portfolio->img) }}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="{{ $portfolio->title }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{ url('/portfolioDetails') }}" class="details-link" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection
