@extends('backend.admin.layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="h5 no-margin-bottom">Settings : Footer</h2>
    </div>

            <div class="row">
                <div class="col-6">
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Success !</strong> {{ session()->get('message') }}
                </div>
               
        
                @endif
                </div>
            </div>
    
    <div class="card-body">
            
        <div class="mb-2 ml-3">
            <form>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="address" class="col-4 col-form-label form-control-sm">Address</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="address"
                                    value="{{ $sitesetting->address }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-4 col-form-label form-control-sm">Phone</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="phone"
                                    value="{{ $sitesetting->phone }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="email" class="col-4 col-form-label form-control-sm">Email</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="email"
                                    value="{{ $sitesetting->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newsletter_message" class="col-4 col-form-label form-control-sm">Newsletter Message </label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="newsletter_message"
                                    value="{{ $sitesetting->newsletter_message }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copyright_message" class="col-4 col-form-label form-control-sm">Copyright Message</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="copyright_message"
                                    value="{{ $sitesetting->copyright_message }}">
                            </div>
                        </div>

                    

                       

                        
                    </div>
                    <div class="col-6">
                       
                        <div class="form-group row">
                            <label for="facebook" class="col-4 col-form-label form-control-sm">Facebook</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="facebook"
                                    value="{{ $sitesetting->facebook }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="twitter" class="col-4 col-form-label form-control-sm">Twitter</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="twitter"
                                    value="{{ $sitesetting->twitter }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-4 col-form-label form-control-sm">Instagram</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="instagram"
                                    value="{{ $sitesetting->instagram }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inkedin" class="col-4 col-form-label form-control-sm">linkedin</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="linkedin"
                                    value="{{ $sitesetting->linkedin }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skype" class="col-4 col-form-label form-control-sm">Skype</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control form-control-sm" id="skype"
                                    value="{{ $sitesetting->skype }}">
                            </div>
                        </div>

                    

                       

                        
                    </div>


                </div>

            </form>
        </div>

        <!-- <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a> -->
       
        <a class="btn btn-primary edit-profile" href="{{ route('admin.sitesettings-footer.edit', $sitesetting->id) }}"> <i class="fa fa-pencil-square fa-lg"></i> Edit</a>
             <br>
             <br>
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