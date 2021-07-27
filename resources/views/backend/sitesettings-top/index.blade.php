

@extends('backend.layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
      Site Settings: Top
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
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

                    

                       

                        
                    </div>


                </div>

            </form>
        </div>

        <!-- <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
            {{ trans('global.back_to_list') }}
        </a> -->
    </div>

    <nav class="mb-3">
        <div class="nav nav-tabs">

        </div>
    </nav>
    <div class="tab-content">

    </div>
</div>
</div>
@endsection