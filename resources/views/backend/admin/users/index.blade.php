@extends('backend.layouts.app')
@section('content')

<div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Users</h2>
          </div>
        </div>

        <section class="no-padding-bottom" >
       
          <div class="container-fluid">
          <span >{{$users->links("pagination::bootstrap-4")}}</span>
                   @if(session()->has('message'))
                    <div>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            {{ session()->get('message') }}
                        </div>
                    </div>
            
                     @endif
          

          @foreach ($users as $user)
            <div class="public-user-block block">
          
              <div class="row d-flex align-items-center"> 
                              
                <div class="col-lg-3 d-flex align-items-center">
                  <div class="order">{{ $user->id}}</div>
                  <div class="avatar"> <img src="{{ $user->UserDetails->image_path }}" alt="..." class="img-fluid">
                </div>
                
                <a href="{{ route('admin.users.show', $user->id)}}" class="name"><strong class="d-block"></strong><span class="d-block">{{ $user->name}}</span></a>
                </div>
                <div class="col-lg-2 text-center">
                  <div class="contributions" >{{ $user->Role->name}}</div>
                </div>
                <div class="col-lg-3 text-center">
                  <div class="contributions">{{ $user->email}}</div>
                </div>
                <div class="col-lg-3">
                  <div class="details d-flex">
                    <div class="item"> <a href="{{ route('admin.users.show', $user->id)}}" class="name"><strong class="d-block"><i class="icon-info"></i>View</a></strong></div>
                    <div class="item"><a href="{{ route('admin.users.edit', $user->id)}}" class="name"><i class="fa fa-gg"></i><strong>Edit</strong></a></div>
                    <div class="item">
                      <form onsubmit="return confirm('Want to delet this User? Are you sure?');" action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="Delete" class="btn btn-danger icon-flow-branch"></input>
                      </form>
                      
                    </div>
                  </div>
                </div>
               
              </div>
             
            </div>
            @endforeach
           
          </div>
        </section>
        
        <!-- {!! $users->links() !!} -->
      
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>
        
        


@endsection
