

@extends('backend.layouts.app')
@section('content')

 
<div class="card"> 
    <div class="card-header">
    <h2 class="h5 no-margin-bottom">Settings : Top</h2>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session()->get('message') }}
    </div>
    @endif
    <div class="card-body">
             <a class="btn btn-info" href="{{ route('admin.sitesettings-top.edit', $sitesetting->id) }}">Edit</a>
             <br>
             <br>
        <div class="mb-2 ml-3">
            <form>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="sitetitie" class="col-4 col-form-label">Site Title</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="sitetitie"
                                    value="{{ $sitesetting->sitetitle }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-4 col-form-label">Heading</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="staticEmail"
                                    value="{{ $sitesetting->heading }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="staticEmail" class="col-4 col-form-label">Sub Heading</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="staticEmail"
                                    value="{{ $sitesetting->sub_heading }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-4 col-form-label">Button Text </label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="staticEmail"
                                    value="{{ $sitesetting->button_text }}">
                            </div>
                        </div>
                       
                    
                        <div class="form-group row">
                            <label for="staticEmail" class="col-4 col-form-label">Background Image</label>
                            <div class="col-8">
                            <img src="{{$sitesetting->getFirstMediaUrl('images')}}" / width="120px">
                            </div>
                        </div>
                       

                        
                    </div>


                </div>

            </form>
        </div>

        <!-- <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a> -->
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