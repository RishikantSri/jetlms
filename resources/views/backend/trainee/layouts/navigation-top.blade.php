<!-- Top Navigation-->
<nav class="navbar navbar-expand-lg">

  <div class="search-panel">
    <div class="search-inner d-flex align-items-center justify-content-center">
      <div class="close-btn">Close <i class="fa fa-close"></i></div>
      <form id="searchForm" action="#">
        <div class="form-group">
          <input type="search" name="search" placeholder="What are you searching for...">
          <button type="submit" class="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  <div class="container-fluid d-flex align-items-center justify-content-between">
    <div class="navbar-header">
      <!-- Navbar Header--><a href="{{ url('/dashboard') }}" class="navbar-brand">
        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">LmsJet</strong><strong>Admin</strong></div>
        <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div>
      </a>
      <!-- Sidebar Toggle Btn-->
      <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      <a href="{{ url('/') }}" target="_blank" class="waves-effect waves-dark" style="
    margin-left: 36px;">
        <span class="pcoded-micon" style="
    padding: 2px"><i class="icon-home"></i></span>
        <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
      </a>
    </div>
    <div class="right-menu list-inline no-margin-bottom">



      <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>

      <!-- Languages dropdown    -->
      <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="{{ asset('backend/img/flags/16/GB.png') }} " alt="English"><span class="d-none d-sm-inline-block">English</span></a>
        <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{ asset('backend/img/flags/16/DE.png') }} " alt="English" class="mr-2"><span>German</span></a><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{ asset('backend/img/flags/16/FR.png') }} " alt="English" class="mr-2"><span>French </span></a></div>
      </div>

      <!-- Profile dropdown    -->
      <div class="list-inline-item dropdown"><a id="profile" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><span class="d-none d-sm-inline-block">My Account</span></a>
        <div aria-labelledby="profile" class="dropdown-menu">


          <a rel="nofollow" href="{{ route('trainee.myprofile.show', Auth::user()->id) }}" class="dropdown-item"> <i class="icon-user mr-2"></i><span>My Profile</span></a>

          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-logout mr-2"></i>LogOut </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
            {{ csrf_field() }}
          </form>

        </div>

      </div>


    </div>
  </div>
</nav>