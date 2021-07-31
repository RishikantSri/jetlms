@extends('backend.layouts.app')
@section('content')

       
 
   

<div class="card">
    <div class="card-header">
        <h2 class="h5 no-margin-bottom">Settings : Footer</h2>
    </div>

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> 
        {{ session()->get('message') }}
    </div>
    @endif
    
    <div class="card-body">
             <a class="btn btn-info" href="{{ route('admin.sitesettings-footer.edit', $sitesetting->id) }}">Edit</a>
             <br>
             <br>
        <div class="mb-2 ml-3">
            <form>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group row">
                            <label for="address" class="col-4 col-form-label">Address</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="address"
                                    value="{{ $sitesetting->address }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-4 col-form-label">phone</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="phone"
                                    value="{{ $sitesetting->phone }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="email" class="col-4 col-form-label">email Heading</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="email"
                                    value="{{ $sitesetting->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newsletter_message" class="col-4 col-form-label">Newsletter Message </label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="newsletter_message"
                                    value="{{ $sitesetting->newsletter_message }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copyright_message" class="col-4 col-form-label">copyright_message</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="copyright_message"
                                    value="{{ $sitesetting->copyright_message }}">
                            </div>
                        </div>

                    

                       

                        
                    </div>
                    <div class="col-6">
                       
                        <div class="form-group row">
                            <label for="facebook" class="col-4 col-form-label">facebook</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="facebook"
                                    value="{{ $sitesetting->facebook }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="twitter" class="col-4 col-form-label">twitter</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="twitter"
                                    value="{{ $sitesetting->twitter }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-4 col-form-label">instagram Message </label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="instagram"
                                    value="{{ $sitesetting->instagram }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inkedin" class="col-4 col-form-label">linkedin</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="linkedin"
                                    value="{{ $sitesetting->linkedin }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skype" class="col-4 col-form-label">skype</label>
                            <div class="col-8">
                                <input type="text" readonly class="form-control" id="skype"
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