@extends('layouts.main')
@section('middle')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    @foreach ($portfolioDetails as $portfolio)
                        <div class="col-lg-8">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">

                                    <div class="swiper-slide">
                                        <img src="{{ asset('uploads/' . $portfolio->img) }}" alt="">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="portfolio-info">
                                <h3>Project information</h3>
                                <ul>
                                    <li><strong>Category</strong>:{{ $portfolio->category }}</li>
                                    <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                                    <li><strong>Project date</strong>: {{ $portfolio->date }}</li>
                                    <li><strong>Project URL</strong>: <a
                                            href="{{ $portfolio->URL }}">{{ $portfolio->title }}</a></li>
                                </ul>
                            </div>
                            <div class="portfolio-description">
                                <h2>{{ $portfolio->title }}</h2>
                                <p>
                                    {{ $portfolio->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection
