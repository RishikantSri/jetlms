@extends('backend.layouts.app')
@section('content')
<div class="card"> 
    <div class="container bootstrap snippets bootdeys">
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row" id="user-profile">
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="main-box clearfix" style="min-height: 95%">
                        <h3><span>Create Course</span></h3>
                        <h6><span>Enter Details</span></h6>
                        <div class="form-group">
                         
                                <div class="" style="margin-top: 90%">
                                <label for="course_image" class=" col-form-label form-control-sm" >Select   Course Image</label>
                                    <input type="file" name="course_image"  class="form-control form-control-sm" id="course_image">
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
                                        <span class="input-group-text" id="basic-addon1">{{ __('Course Title') }}</span>
                                    </div>
                                    <input type="text" name="title" :value="old('title')" class="form-control" placeholder="Title" aria-label="Title" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">{{ __('Category') }}:</span>
                                    </div>
                                    <input type="text" name="category" :value="old('category')"  class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Author :</span>
                                    </div>
                                    <input type="text" name="author" :value="old('author')"  class="form-control" placeholder="Author" aria-label="Author" aria-describedby="basic-addon1">
                                    </div>

                                </div>    
                               
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Price :</span>
                                    </div>
                                    <input type="text" name="price" :value="old('price')"   class="form-control" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1">
                                    </div>

                                </div>  
                                
                                  
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">{{ __('Description') }}</span>
                                    </div>
                                    <textarea id="description" :value="old('description')" name="description"  class="form-control"  aria-label="With textarea" cols="30" rows="7"></textarea>
                                    </div>
                                </div> 
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                    <div class="input-group">
                                    <input class="btn btn-danger save-profile" type="submit" name="" value="Create Course">

                                    </div>
                                </div> 
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
           
            </form>
    </div>
</div> 
 




@endsection 