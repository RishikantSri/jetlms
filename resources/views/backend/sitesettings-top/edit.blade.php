
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
                            <label for="sitetitie" class="col-4 col-form-label">Site Title</label>
                            <div class="col-8">
                                <input type="text"  class="form-control" id="sitetitie" name="sitetitle"
                                    value=" {{ $sitesetting->sitetitle }}">
                                    @if($errors->has('name'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </em>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-4 col-form-label">Heading</label>
                            <div class="col-8">
                                <input type="text"  class="form-control" id="sec_cour_headind" name="heading"
                                    value=" {{ $sitesetting->heading }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-4 col-form-label">Sub Heading</label>
                            <div class="col-8">
                                <input type="text"  class="form-control" id="sec_cour_headind" name="sub_heading"
                                    value=" {{ $sitesetting->sub_heading }}">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="staticEmail" class="col-4 col-form-label">Button Text</label>
                            <div class="col-8">
                                <input type="text"  class="form-control" id="sec_cour_des" name="button_text"
                                    value="{{ $sitesetting->button_text }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="staticEmail" class="col-4 col-form-label">Background Image </label>
                            <div class="col-8">
                            <img src="{{$sitesetting->getFirstMediaUrl('images')}}" / width="120px">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="copyright_message" class="col-4 col-form-label">Change Image</label>
                            <div class="col-8">
                            <input type="file" name ="background_image" class="form-control" id="background_image" >
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
@endsection

@section('scripts')

@stop 