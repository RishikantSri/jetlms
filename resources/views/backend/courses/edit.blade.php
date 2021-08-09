@extends('backend.layouts.app')
@section('content')



 
<div class="card"> 
    <div class="container bootstrap snippets bootdeys">
        <form action="{{ route('admin.courses.update',$course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
            <div class="row" id="user-profile">
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="main-box clearfix">
                            <h3><span>Edit Course Info</span></h3>
                            
                                <img src='{{ $course->course_image }}'  alt="" class="profile-img img-responsive center-block" style="width: 100%";> <div class="profile-label">
                                    <span class="label label-danger">Course By {{ $course->Author->name}}</span>
                                </div>

                                <div class="form-group">
                                    <label for="course_image" class=" col-form-label form-control-sm">Change Course Image</label>
                                    <div class="">
                                        <input type="file" name="course_image" class="form-control form-control-sm" id="course_image">
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8 col-sm-8">
                            
                            <div class="main-box clearfix">
                                <div class="profile-header">
                                   
                                    <div class="">
                                    @if(session()->has('message'))
                                    <div>
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <strong>Success !</strong> {{ session()->get('message') }}
                                        </div>
                                    </div>
                            
                                    @endif
                                    </div>
                                    
                                </div>
                            <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                             @endif
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Course Title:</span>
                                    </div>
                                    <input type="text" name="title"  value="{{$course->title}}"  class="form-control" placeholder="title" aria-label="title" aria-describedby="basic-addon1">
                                   
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Category:</span>
                                    </div>
                                    <input type="text" name="category" value="{{ isset($course->category) ? $course->category:'N/A'  }}"  class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
                                    
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Author :</span>
                                    </div>
                                    <input type="text" name="author" value="{{ $course->author }}"  class="form-control" placeholder="Author" aria-label="Author" aria-describedby="basic-addon1">
                                   
                                    </div>

                                </div>    
                               
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Price :</span>
                                    </div>
                                    <input type="text" name="price" value="{{$course->price}}"  class="form-control" placeholder="Priec" aria-label="Price" aria-describedby="basic-addon1">
                                   
                                    </div>

                                </div>  
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rating:</span>
                                    </div>
                                    <input type="number" name="rating" value="{{ $course->rating  }}"  class="form-control" placeholder="Rating" aria-label="Rating" aria-describedby="basic-addon1">
                                   
                                    </div>

                                </div>   
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Likes:</span>
                                    </div>
                                    <input type="number" name="likes" value="{{ $course->likes }}"  class="form-control" placeholder="Likes" aria-label="Likes" aria-describedby="basic-addon1">
                                   
                                    </div>

                                </div>  
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> Published:</span>
                                    </div>
                                    <input type="text" name="published" value="{{ $course->published}}"  class="form-control" placeholder="Published" aria-label="Published" aria-describedby="basic-addon1">
                                    
                                    </div>

                                </div> 
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Show at Home:</span>
                                    </div>
                                    <input type="checkbox" name="show_at_home" class="switch-input" value="1" {{ ($course->show_at_home==1) ? 'checked="checked"' : '' }}/>
                                    
                                    </div>

                                </div> 
                              
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">Description</span>
                                    </div>
                                    <textarea class="form-control" name="description" aria-label="With textarea" cols="30" rows="7">{{ isset($course->description) ? $course->description:'N/A'  }}</textarea>
                                    
                                    </div>
                                </div>   
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                            <div class="input-group">
                                            <input class="btn btn-danger save-profile" type="submit" value="Save">

                                            </div>
                                        </div> 
                            </div>
                            </div>
                        </div>
                        
        </div>
        </form>
    </div> 
 </div>  

<footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2021 &copy; Your company. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
</footer>



@endsection 