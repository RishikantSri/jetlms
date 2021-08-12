 <!-- Sidebar Navigation-->
 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ auth()->user()->UserDetails->image_path }}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ auth()->user()->name }}</h1>
            <p>Trainer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="{{ request()->routeIs('trainer.dashboard') ? 'active' : '' }}" ><a href="{{ route('trainer.dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
         
         
          <li class="{{ request()->routeIs('trainer.courses*') ? 'active' : '' }}" ><a href="#coursedropdownDropdown2" aria-expanded="false" data-toggle="collapse"><i class="icon-user"></i>{{ __("Courses") }} </a></a>
            <ul id="coursedropdownDropdown2" class="collapse list-unstyled ">
              <li class="{{ request()->routeIs('trainer.courses.index') ? 'active' : '' }}" ><a href="{{ route('trainer.courses.index' ) }}">Course List</a></li>
              <li class="{{ request()->routeIs('trainer.courses.index') ? 'active' : '' }}" ><a href="{{ route('trainer.courses.create',$id=1) }}">Create New </a></li>
              
            </ul>
          </li>
       
         
          <li class="{{ request()->routeIs('trainer.lessons.index') ? 'active' : '' }}" ><a href="{{route('trainer.lessons.index')}}" :active="request()->routeIs('trainer.lessons.index')"> <i class="fa fa-bar-chart"></i>{{ __("Lessons") }}</a></li>
         
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-logout"></i>LogOut </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        {{ csrf_field() }}
            </form>
        </li>
      
       
      </nav>