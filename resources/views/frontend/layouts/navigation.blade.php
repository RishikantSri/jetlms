<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="route(/)">Mentoring</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="pricing.html">Pricing</a></li>
         
          <li><a href="contact.html">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                       
                          <a href="{{ url('/dashboard') }}" target="_blank" class="dashboard-btn">Dashboard</a>
                          <a href="{{ route('logout') }}" class="dashboard-btn"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none">
                                        {{ csrf_field() }}
                                    </form>
                         
                    @else
                        <!-- <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> -->
                         <a href="{{ route('login') }}" class="get-started-btn">Get Started</a>

                        @if (Route::has('register'))
                          
                            <a href="{{ route('register') }}" class="get-started-btn">Register</a>
                        @endif
                    @endauth
                </div>
        @endif

     

    </div>
  </header><!-- End Header -->