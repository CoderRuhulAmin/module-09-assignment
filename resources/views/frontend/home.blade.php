@extends('frontend.layouts.app')



@section("content")

    <!-- Page Content-->
    <div class="page-content">
        <div class="container-fluid p-0">

            <!-- About-->
            @include('frontend.pages.about')

            <!-- Experience-->
            @include('frontend.pages.experience')

            <!-- Education-->
            @include('frontend.pages.education')
            
            <!-- Skills-->
            @include('frontend.pages.skills')
            
            <!-- Interests-->
            @include('frontend.pages.interests')

            <!-- Awards-->
            <!-- @include('frontend.pages.awards') -->

            <!-- Portfolio -->
            @include('frontend.pages.portfolio')

            <!-- Contact-->
            @include('frontend.pages.contact')




        </div>
    </div>

@endsection