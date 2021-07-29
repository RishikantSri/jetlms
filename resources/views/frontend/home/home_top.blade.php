<section id="hero" style="background: url( {{ $sitesettings->getFirstMediaUrl('images') }} ) top center" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>{{$sitesettings->heading}}</h1>
      <h2>{{$sitesettings->sub_heading}}</h2>
      <a href="courses.html" class="btn-get-started">{{$sitesettings->button_text}}</a>
    </div>
</section>
<!-- End Hero -->