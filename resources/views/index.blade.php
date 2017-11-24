@extends('layouts.master')
@section('content')
    @if(!Auth::guest() && Session::has('success'))
        <div class="row teal darken-1">
            <div class="col s10 offset-s1 col m10 offset-m1 col l10 offset-l1 center" style="color:orange">
                {{Session::get('success')}}
            </div>
        </div>
    @endif
    <!-- Main page -->
    <div class="row">
        <div class="col s12 m12 l8 offset-l2 ">
            <div class="carousel carousel-slider center" data-indicators="true">

                <div class="carousel-item white-text" href="#one!">
                    <img src="pictures/party1.jpg" alt="">
                    <h2>First Panel</h2>
                    <p class="white-text">This is your first panel</p>
                </div>
                <div class="carousel-item  white-text" href="#two!">
                    <img src="pictures/party1.jpg" alt="">
                    <h2>Second Panel</h2>
                    <p class="white-text">This is your second panel</p>
                </div>
                <div class="carousel-item  white-text" href="#three!">
                    <img src="pictures/party1.jpg" alt="">
                    <h2>Third Panel</h2>
                    <p class="white-text">This is your third panel</p>
                </div>
                <div class="carousel-item  white-text" href="#four!">
                    <img src="pictures/party1.jpg" alt="">
                    <h2>Fourth Panel</h2>
                    <p class="white-text">This is your fourth panel</p>
                </div>
            </div>
        </div>
    </div>
@endsection