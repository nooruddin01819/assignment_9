@extends('layout.app')

@section('content')

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-center">
            <h2>About</h2>
            <p>
                Greetings! I'm Noor Uddin, a Programmer at Chittagong University of Engineering and Technology. With over five years of experience. Specializing in PHP CodeIgniter and Spring Boot, I'm passionate about creating efficient and innovative software solutions. Let's shape the future of technology together!
            </p>

            <a class="cta-btn" href="{{url('/contact')}}">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="{{asset('assets/img/profile-img.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Professional Web Application Developer</h2>
            <p class="fst-italic py-3">
                I'm a web application developer proficient in PHP, CodeIgniter, Spring Boot, and MySQL, with three and half years of experience. My expertise lies in creating seamless digital experiences by combining these technologies. From crafting robust back-end systems to optimizing front-end designs, my work revolves around precision and innovation.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>03 Nov 1985</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+8801819349349</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Chittagong</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>37</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>M.Sc. in CSE</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
                In the database realm, my proficiency in MySQL ensures efficient data management, contributing to the overall speed and reliability of applications. Every project I undertake reflects a commitment to excellence, incorporating best practices for performance and security. Whether it's building from scratch or enhancing existing systems, I focus on delivering solutions that not only meet technical requirements but also provide a user-friendly and cutting-edge experience.
            </p>
            <p class="m-0">
                In a rapidly evolving tech landscape, my dedication to staying current ensures that the solutions I offer are at the forefront of innovation. My goal is to bring a perfect blend of technological expertise and creative flair to every project, delivering results that resonate and inspire.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

@endsection
