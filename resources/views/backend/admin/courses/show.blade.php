@extends('backend.admin.layouts.app')
@section('content')



 
<div class="card"> 
    <div class="container bootstrap snippets bootdeys">
        <div class="row" id="user-profile">
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="main-box clearfix">
                            <h3>Course Details</h3>
                        
                            <img src='{{ $course->course_image }}'  alt="" class="profile-img img-responsive center-block" style="width: 100%";> <div class="profile-label">
                                <span class="label label-danger">Course By {{ isset($course->Author->name) ? $course->Author->name:'N/A'  }}</span>
                            </div>

                            <div class="profile-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Course Title:</span>
                                    </div>
                                    <input type="text" value="{{ isset($course->title) ? $course->title:'N/A'  }}" readonly class="form-control-plaintext ml-2"  aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Category:</span>
                                    </div>
                                    <input type="text" value="{{ isset($course->category) ? $course->category:'N/A'  }}" readonly class="form-control-plaintext ml-2"  aria-label="Category" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Author :</span>
                                    </div>
                                    <input type="text" value="{{ isset($course->Author->name) ? $course->Author->name:'N/A'  }}" readonly class="form-control-plaintext ml-2"  aria-label="Author" aria-describedby="basic-addon1">
                                    </div>

                                </div>    
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rating:</span>
                                    </div>
                                    <input type="number" value="{{ isset($course->rating) ? $course->rating:'0'  }}" readonly class="form-control-plaintext ml-2" aria-label="Rating" aria-describedby="basic-addon1">
                                    </div>

                                </div>   
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Likes:</span>
                                    </div>
                                    <input type="number" value="{{ isset($course->likes) ? $course->likes:'0'  }}" readonly class="form-control-plaintext ml-2"  aria-label="Likes" aria-describedby="basic-addon1">
                                    </div>

                                </div>  
                               
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Price :</span>
                                    </div>
                                    <input type="text" value="{{ isset($course->price) ? $course->price:'0.0'  }}" readonly class="form-control-plaintext ml-2" aria-label="Price" aria-describedby="basic-addon1">
                                    </div>

                                </div>  
                                <div class="col-lg-5 col-md-5 col-sm-5">
                                    <div class="input-group input-group-sm mb-3">
                                     <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Created On :</span>
                                    </div>
                                    <input type="text" value="{{ isset($course->created_at) ? $course->created_at:'N/A'  }}" readonly class="form-control-plaintext ml-2" aria-label="Created On" aria-describedby="basic-addon1">
                                    </div>

                                </div>  
                               
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"> Published:</span>
                                    </div>
                                    <input type="text" value="{{ isset($course->published) ? $course->published:'N/A'  }}" readonly class="form-control-plaintext ml-2"  aria-label="Published" aria-describedby="basic-addon1">
                                    </div>
 
                                </div>  
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="show_at_home">  Show at Home:</span>
                                    </div>
                                    <input type="text" value="{{ ($course->show_at_home==1) ? 'Yes':'No'  }}" readonly class="form-control-plaintext ml-2"  aria-label="show_at_home" aria-describedby="basic-addon1">
                                    </div>
 
                                </div>  
                              
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">Description</span>
                                    </div>
                                    <textarea class="form-control-plaintext ml-2" readonly aria-label="With textarea" cols="30" rows="7">{{ isset($course->description) ? $course->description:'N/A'  }}</textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-3 col-md-3 col-sm-3 mt-3">
                                    <div class="input-group">
                                    <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-primary edit-profile">
                                    <i class="fa fa-pencil-square fa-lg"></i> Edit Course
                                    </a>  
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    
        </div>
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