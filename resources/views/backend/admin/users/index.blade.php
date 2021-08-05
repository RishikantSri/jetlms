@extends('backend.layouts.app')
@section('content')

<div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Users</h2>
          </div>
        </div>

        <section class="no-padding-bottom">
          <div class="container-fluid">
           
          @foreach ($users as $user)
            <div class="public-user-block block">
          
              <div class="row d-flex align-items-center"> 
                              
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">{{ $user->id}}</div>
                  <div class="avatar"> <img src="{{ $user->UserDetails->image_path }}" alt="..." class="img-fluid">
                </div>
                
                <a href="{{ route('profile.show', $user->id)}}" class="name"><strong class="d-block">{{ $user->UserDetails->firstname}} {{ $user->UserDetails->lastname}}</strong><span class="d-block">{{ $user->name}}</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">410 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong><a>View</a></strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>Edit</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>Delete</strong></div>
                  </div>
                </div>
               
              </div>
             
            </div>
            @endforeach
           
          </div>
        </section>
        
        {!! $users->links() !!}
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>


@endsection
