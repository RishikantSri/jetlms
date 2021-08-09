 <!-- Sidebar Navigation-->
 <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{ auth()->user()->UserDetails->image_path }}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ auth()->user()->name }}</h1>
            @if (auth()->user()->role_id == 1)
            <p>Super Admin</p>
            @endif
          
            @if (auth()->user()->role_id == 2)
            <p>Trainer</p>
            @endif

            @if (auth()->user()->role_id == 3)
            <p>Trainee</p>
            @endif
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}" ><a href="{{ route('dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
          @if (auth()->user()->role_id == 1)
          <li class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}" ><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="icon-user"></i>{{ __("Users") }} </a></a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }}" ><a href="{{ route('admin.users.index' ) }}">User List</a></li>
              <li class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }}" ><a href="{{ route('admin.users.create',$id=1) }}">Create New </a></li>
              
            </ul>
          </li>
         
          @endif
          @if (auth()->user()->role_id == 1)
          <li class="{{ request()->routeIs('admin.courses*') ? 'active' : '' }}" ><a href="#coursedropdownDropdown2" aria-expanded="false" data-toggle="collapse"><i class="icon-user"></i>{{ __("Courses") }} </a></a>
            <ul id="coursedropdownDropdown2" class="collapse list-unstyled ">
              <li class="{{ request()->routeIs('admin.courses.index') ? 'active' : '' }}" ><a href="{{ route('admin.courses.index' ) }}">Course List</a></li>
              <li class="{{ request()->routeIs('admin.courses.index') ? 'active' : '' }}" ><a href="{{ route('admin.courses.create',$id=1) }}">Create New </a></li>
              
            </ul>
          </li>
         
          @endif
          @if (auth()->user()->role_id == 3)
          <li class="{{ request()->routeIs('trainee.lessons.index') ? 'active' : '' }}" ><a href="{{route('trainee.lessons.index')}}" :active="request()->routeIs('trainee.lessons.index')"> <i class="fa fa-bar-chart"></i>{{ __("Lessons") }}</a></li>
                            
          @endif
          @if (auth()->user()->role_id == 2)
          <li class="{{ request()->routeIs('trainer.courses.index') ? 'active' : '' }}" ><a href="{{ route('trainer.courses.index')}}" > <i class="icon-padnote"></i>{{ __("Courses") }}</a></li>
          @endif
          
          @if (auth()->user()->role_id == 1)
          <li class="{{ request()->routeIs('admin.sitesettings*') ? 'active' : '' }}" ><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-settings"></i>Site Settings</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li class="{{ request()->routeIs('admin.sitesettings-top.show') ? 'active' : '' }}" ><a href="{{ route('admin.sitesettings-top.show', $id=1 ) }}">Top</a></li>
              <li class="{{ request()->routeIs('admin.sitesettings-footer.show') ? 'active' : '' }}" ><a href="{{ route('admin.sitesettings-footer.show',$id=1) }}">Footer</a></li>
              
            </ul>
          </li>
          @endif
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-logout"></i>LogOut </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        {{ csrf_field() }}
            </form>
        </li>
      
       
      </nav>