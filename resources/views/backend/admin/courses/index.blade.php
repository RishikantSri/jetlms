@extends('backend.admin.layouts.app')
@section('content')

<div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">All Couses</h2>
          </div>
        </div>

        <section class="no-padding-bottom" >
       
          <div class="container-fluid">
          <span >{{$courses->links("pagination::bootstrap-4")}}</span>
                   @if(session()->has('message'))
                    <div>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="fa fa-times"></i>
                            </button>
                            {{ session()->get('message') }}
                        </div>
                    </div>
            
                     @endif
          

          @foreach ($courses as $course)
            <div class="public-user-block block">
          
              <div class="row d-flex align-items-center"> 
                              
                 <div class="col-lg-3 d-flex align-items-center">
                  <div class="order">{{ $course->id}}</div>
                  <div class="avatar"> <img src="{{ $course->course_image }}" alt="..." class="img-fluid">
                </div>
                
                <a href="{{ route('admin.courses.show', $course->id)}}" class="name"><strong class="d-block"></strong><span class="d-block">{{ $course->title}}</span></a>
                </div>
                <div class="col-lg-2 text-center">
                  <div class="contributions" >{{ $course->Author->name}}</div>
                </div>
                <div class="col-lg-2 text-center">
                  <div class="contributions" >{{ $course->category}}</div>
                </div>
                <div class="col-lg-2 text-center">
                  <div class="contributions">{{ $course->price}}</div>
                </div>
                <div class="col-lg-3">
                      <div class="details d-flex">
                        <div class="item"> <a href="{{ route('admin.courses.show', $course->id)}}" class="name"><strong class="d-block"><i class="icon-info"></i>View</a></strong></div>
                        <div class="item"><a href="{{ route('admin.courses.edit', $course->id)}}" class="name"><i class="fa fa-gg"></i><strong>Edit</strong></a></div>
                        <div class="item">
                          <form onsubmit="return confirm('Want to delet this User? Are you sure?');" action="{{ route('admin.courses.destroy',$course->id) }}" method="POST">
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
        
        <!-- {!! $courses->links() !!} -->

        @include('backend.admin.layouts.footer')
      
       
        
        


@endsection
