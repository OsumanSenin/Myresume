 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>El bazzouna Outman</h1>
      <p>I'm <span class="typed" data-typed-items="Beaugoss, Escroc,Charlantan,Ultra Cute"></span></p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

          @foreach ($about->take(1) as $e)
              
          @endforeach

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset("img/$e->photo") }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong>{{ $e->aniversaire }}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong>{{ $e->website }}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $e->phone  }}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ $e->age  }}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> Master</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </section><!-- End About Section -->