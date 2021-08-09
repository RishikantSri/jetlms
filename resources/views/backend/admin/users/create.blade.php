@extends('backend.layouts.app')
@section('content')



 
<div class="card"> 
  
    
  
   
<div class="container bootstrap snippets bootdeys">

    <div class="row" id="user-profile">
        
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
            <h6>Step 1: Create user with basic data</h6>
           <h6>Step 2: Update Userdetails </h6>
            </div>
        </div>

        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="main-box clearfix">
                <div class="profile-header">
                    <h3><span>User Create New</span></h3>
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
                    
                </div>
               
                <div class="card-body">
                <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method('POST')
               
                <div class="row">
                <div class="col-6">    
                <div class="form-group">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }} form-control form-control-sm" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }} form-control form-control-sm" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="mt-4">
                    <x-jet-label for="gender" value="{{ __('Gender:') }}" />
                    <select name="gender" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm form-control form-control-sm">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }} form-control form-control-sm" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control form-control form-control-sm" type="password" name="password_confirmation" required autocomplete="new-password" />

                </div>
                
                </div>
                <div class="col-6">
                
              
                <div class="form-group">
                <x-jet-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" x-model="role_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm form-control form-control-sm">
                    <option value="2">Trainer</option>
                    <option value="3">Trainee</option>
                </select>
            </div>

            <div class="form-group" x-show="role_id == 2">
                <x-jet-label for="trainee_address" value="{{ __('Address') }}" />
                <x-jet-input id="trainee_address" class="block mt-1 w-full form-control form-control-sm" type="text" :value="old('trainee_address')" name="trainee_address" />
            </div>

            <div class="form-group" x-show="role_id == 2">
                <x-jet-label for="trainer_qualifications" value="{{ __('Qualifications') }}" />
                <x-jet-input id="trainer_qualifications" class="block mt-1 w-fullform-control form-control-sm" type="text" :value="old('trainer_qualifications')" name="trainer_qualifications" />
            </div>
            
            <div class="form-group" x-show="role_id == 3">
                <x-jet-label for="trainee_licence_number" value="{{ __('Licence Number') }}" />
                <x-jet-input id="trainee_licence_number" class="block mt-1 w-full form-control form-control-sm" type="text" :value="old('trainee_licence_number')" name="trainee_licence_number" />
            </div>

           
            
            </div>
            
        </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif
                <input class="btn btn-danger save-profile" type="submit" name="" value="Create profile">
            </form>
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