
@extends('backend.admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
    Edit the details here
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sitesettings-footer.update", [$sitesetting->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            

               <div class="row">
               <div class="col-6">
                        <div class="form-group row">
                            <label for="address" class="col-4 col-form-label form-control-sm">Address</label>
                            <div class="col-8">
                                <input type="text"  name="address" class="form-control  form-control-sm" id="address"
                                    value="{{ $sitesetting->address }}">
                                    @error('address')
                                    
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-4 col-form-label form-control-sm float-right">Phone</label>
                            <div class="col-8">
                                <input type="text"  name="phone" class="form-control  form-control-sm" id="phone"
                                    value="{{ $sitesetting->phone }}">
                                    @error('phone')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="email" class="col-4 col-form-label form-control-sm">Email</label>
                            <div class="col-8">
                                <input type="text"  name="email" class="form-control  form-control-sm" id="email"
                                    value="{{ $sitesetting->email }}">
                                    @error('email')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newsletter_message" class="col-4 col-form-label form-control-sm">Newsletter Message </label>
                            <div class="col-8">
                                <input type="text"  name="newsletter_message" class="form-control  form-control-sm" id="newsletter_message"
                                    value="{{ $sitesetting->newsletter_message }}">
                                    @error('newsletter_message')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copyright_message" class="col-4 col-form-label form-control-sm">Copyright Message</label>
                            <div class="col-8">
                                <input type="text"  name="copyright_message" class="form-control  form-control-sm" id="copyright_message"
                                    value="{{ $sitesetting->copyright_message }}">
                                    @error('copyright_message')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        

                    

                       

                        
                    </div>
                    <div class="col-6">
                       
                        <div class="form-group row">
                            <label for="facebook" class="col-4 col-form-label form-control-sm">Facebook</label>
                            <div class="col-8">
                                <input type="text"  name="facebook" class="form-control  form-control-sm" id="facebook"
                                    value="{{ $sitesetting->facebook }}">
                                    @error('facebook')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="twitter" class="col-4 col-form-label form-control-sm">Twitter</label>
                            <div class="col-8">
                                <input type="text"  name="twitter" class="form-control  form-control-sm" id="twitter"
                                    value="{{ $sitesetting->twitter }}">
                                    @error('twitter')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-4 col-form-label form-control-sm">Instagram</label>
                            <div class="col-8">
                                <input type="text"  name="instagram" class="form-control  form-control-sm" id="instagram"
                                    value="{{ $sitesetting->instagram }}">
                                    @error('instagram')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inkedin" class="col-4 col-form-label form-control-sm">linkedin</label>
                            <div class="col-8">
                                <input type="text"  name="linkedin" class="form-control  form-control-sm" id="linkedin"
                                    value="{{ $sitesetting->linkedin }}">
                                    @error('linkedin')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skype" class="col-4 col-form-label form-control-sm">Skype</label>
                            <div class="col-8">
                                <input type="text"  name="skype" class="form-control  form-control-sm" id="skype"
                                    value="{{ $sitesetting->skype }}">
                                    @error('skype')
                                    <div class="alert alert-danger" ><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>

                    

                       

                        
                    </div>

                    
                </div>
            
            <div>
                <input class="btn btn-danger" type="submit" value="save">
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