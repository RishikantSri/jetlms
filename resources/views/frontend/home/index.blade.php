@extends('frontend.layouts.app')

@section('content')
 
    @include('frontend.home.home_top')


  <main id="main"> 

    <!-- ======= About Section ======= -->
    

    @include('frontend.home.home_aboutus')

    <!-- ======= Counts Section ======= -->
    
    @include('frontend.home.home_countus')
    <!-- ======= Why Us Section ======= -->
    

    @include('frontend.home.home_whychose')

    <!-- ======= Features Section ======= -->
    
    @include('frontend.home.home_features')

    <!-- ======= Popular Courses Section ======= -->
   
    @include('frontend.home.home_pop_course')
    <!-- ======= Trainers Section ======= -->
   
    @include('frontend.home.home_trainers')

  </main><!-- End #main -->

@endsection