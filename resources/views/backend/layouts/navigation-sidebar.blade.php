 <!-- Sidebar Navigation-->
 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ auth()->user()->UserDetails->image_path }}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ auth()->user()->name }}</h1>
            @if (auth()->user()->role_id == 1)
            <p>Admin</p>
            @endif
            @if (auth()->user()->role_id == 2)
            <p>Student</p>
            @endif
            @if (auth()->user()->role_id == 3)
            <p>Teacher</p>
            @endif
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}" ><a href="{{ route('dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
          @if (auth()->user()->role_id == 1)
          <li class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }}"  ><a href="{{route('admin.users.index')}}"   > <i class="icon-user"></i>{{ __("Users") }} </a></li>
          @endif
          @if (auth()->user()->role_id == 2)
          <li class="{{ request()->routeIs('student.lessons.index') ? 'active' : '' }}" ><a href="{{route('student.lessons.index')}}" :active="request()->routeIs('student.lessons.index')"> <i class="fa fa-bar-chart"></i>{{ __("Lessons") }}</a></li>
                            
          @endif
          @if (auth()->user()->role_id == 3)
          <li class="{{ request()->routeIs('teacher.courses.index') ? 'active' : '' }}" ><a href="{{ route('teacher.courses.index')}}" > <i class="icon-padnote"></i>{{ __("Courses") }}</a></li>
          @endif
          
         
          <li class="{{ request()->routeIs('admin.sitesettings*') ? 'active' : '' }}" ><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-settings"></i>Site Settings</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li class="{{ request()->routeIs('admin.sitesettings-top.show') ? 'active' : '' }}" ><a href="{{ route('admin.sitesettings-top.show', $id=1 ) }}">Top</a></li>
              <li class="{{ request()->routeIs('admin.sitesettings-footer.show') ? 'active' : '' }}" ><a href="{{ route('admin.sitesettings-footer.show',$id=1) }}">Footer</a></li>
              
            </ul>
          </li>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-logout"></i>LogOut </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        {{ csrf_field() }}
            </form>
        </li>
      
       
      </nav>