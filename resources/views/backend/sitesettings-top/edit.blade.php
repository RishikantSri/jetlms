@extends('backend.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        Edit the details here
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sitesettings-top.update", [$sitesetting->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           
            <div class="row">
                <div class="col-6">
                    <div class="form-group row">
                        <label for="sitetitie" class="col-4 col-form-label  form-control-sm"> Site Title</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" id="sitetitie" name="sitetitle" value=" {{ $sitesetting->sitetitle }}">
                            @error('sitetitle')
                            <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                            @enderror
                           
                        </div>
                         
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-4 col-form-label  form-control-sm"> Heading</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" id="sec_cour_headind" name="heading" value=" {{ $sitesetting->heading }}">
                            @error('heading')
                            <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-4 col-form-label  form-control-sm"> Sub Heading</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" id="sec_cour_headind" name="sub_heading" value=" {{ $sitesetting->sub_heading }}">
                            @error('sub_heading')
                            <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <label for="staticEmail" class="col-4 col-form-label  form-control-sm"> Button Text</label>
                        <div class="col-8">
                            <input type="text" class="form-control form-control-sm" id="sec_cour_des" name="button_text" value="{{ $sitesetting->button_text }}">
                            @error('button_text')
                            <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-4 col-form-label  form-control-sm"> Background Image </label>
                        <div class="col-8">
                            <img src="{{$sitesetting->getFirstMediaUrl('images')}}" / width="120px">
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <label for="copyright_message" class="col-4 col-form-label  form-control-sm"> Change Image</label>
                        <div class="col-8">
                            <input type="file" name="background_image" class="form-control form-control-sm" id="background_image">
                        </div>
                    </div>



                </div>


            </div>

            <div>
                <input class="btn btn-danger save-profile" type="submit" value="save">
               
             <br>
             <br>
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

@section('scripts')

@stop