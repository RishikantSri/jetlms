@extends('backend.layouts.app')
@section('content')



  <div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5> {{ __('All Users') }} </h5>
                <span></span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-times close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                Users tabale
            </div>
        </div>
    </div>
</div>


@endsection
