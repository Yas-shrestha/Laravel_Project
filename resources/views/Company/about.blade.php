@extends('layouts.main')
@section('middle')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    @foreach ($abouts as $about)
                        <div class="col-lg-6 col-md-6" data-aos="fade-right">
                            <h2>{{ $about->top_title }}</h2>
                            <h3>{{ $about->title }}</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 pt-4 pt-lg-0" data-aos="fade-left">
                            <p>
                                {{ $about->top_desc }}
                            </p>
                            <p class="fst-italic">
                                {{ $about->description }}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Team</strong></h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{ asset('uploads/' . $team->img) }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href="{{ $team->twitter }}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{ $team->facebook }}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{ $team->instagram }}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{ $team->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $team->name }}</h4>
                                    <span>{{ $team->post }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Our Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our <strong>Skills</strong></h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">
                    @foreach ($skills as $skill)
                        <div class="col-lg-6" data-aos="fade-up">

                            <div class="progress">
                                <h1 class="border text-center text-dark"> {{ $skill->title }}</h1>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Our Skills Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Clients</h2>
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
                    @foreach ($clients as $client)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="client-logo">
                                <img src="{{ asset('uploads/' . $client->img) }}" class="img-fluid" alt=""
                                    width="100%">
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Our Clients Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection
