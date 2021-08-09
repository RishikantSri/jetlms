<section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach ($courses as $course)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ $course->course_image }}" class="img-fluid" alt="..." width="300px" height="400px">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{ $course->category }}</h4>
                  <p class="price">${{ $course->price }}</p>
                </div>

                <h3><a href="course-details.html">{{ $course->title }}</a></h3>
                <p>{{ $course->description }}</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{ $course->Author->UserDetails->image_path }} " class="img-fluid" alt="">
                    <span>{{ $course->Author->UserDetails->firstname }}</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;{{ $course->likes }}
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
         @endforeach
         

        </div>

      </div>
    </section><!-- End Popular Courses Section -->