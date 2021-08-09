<section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trainers</h2>
          <p>Our Professional Trainers</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach ($trainers as $trainer)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ $trainer->image_path }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{ $trainer->firstname }}</h4><h4>{{ $trainer->lastname }}</h4> 
                <span><h4>{{ $trainer->skills }}</h4></span>
                <p>
                <h4>{{ $trainer->about }}</h4>
                </p>
                <div class="social">
                  <a href="{{ $trainer->twitter }}"><i class="icofont-twitter"></i></a>
                  <a href="{{ $trainer->facebook }}"><i class="icofont-facebook"></i></a>
                  <a href="{{ $trainer->instagram }}"><i class="icofont-instagram"></i></a>
                  <a href="{{ $trainer->linkedin }}"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Trainers Section -->