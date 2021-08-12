 <!-- Sidebar Navigation-->
 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ auth()->user()->UserDetails->image_path }}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ auth()->user()->name }}</h1>
            <p>Trainee</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="{{ request()->routeIs('trainee.dashboard') ? 'active' : '' }}" ><a href="{{ route('trainee.dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
         
                            
        
          <li class="{{ request()->routeIs('trainee.courses.index') ? 'active' : '' }}" ><a href="{{ route('trainee.courses.index')}}" > <i class="icon-padnote"></i>{{ __("My Courses") }}</a></li>

          <li class="{{ request()->routeIs('trainee.lessons.index') ? 'active' : '' }}" ><a href="{{route('trainee.lessons.index')}}" :active="request()->routeIs('trainee.lessons.index')"> <i class="fa fa-bar-chart"></i>{{ __("My Lessons") }}</a></li>
          
         
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-logout"></i>LogOut </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        {{ csrf_field() }}
            </form>
        </li>
      
       
      </nav>