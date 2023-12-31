@extends('layout.app')

@section('content')

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2>Projects</h2>
                    <p>
                        Explore a showcase of my expertise in a project beneath. Using PHP, CodeIgniter, Spring Boot, and MySQL, it embodies precision, innovation, and a commitment to excellence, reflecting cutting-edge web development.
                    </p>

                    <a class="cta-btn" href="{{url('/contact')}}">Available for hire</a>

                </div>
            </div>
        </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{asset('assets/img/gallery/gallery-1.jpg')}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{asset('assets/img/gallery/gallery-1.jpg')}}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{asset('assets/img/gallery/gallery-2.jpg')}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{asset('assets/img/gallery/gallery-2.jpg')}}" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{asset('assets/img/gallery/gallery-3.jpg')}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{asset('assets/img/gallery/gallery-3.jpg')}}" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{asset('assets/img/gallery/gallery-4.jpg')}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{asset('assets/img/gallery/gallery-4.jpg')}}" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{asset('assets/img/gallery/gallery-5.jpg')}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{asset('assets/img/gallery/gallery-5.jpg')}}" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="{{asset('assets/img/gallery/gallery-6.jpg')}}" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="{{asset('assets/img/gallery/gallery-6.jpg')}}" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="#" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>
    </section><!-- End Gallery Section -->

</main><!-- End #main -->

@endsection
