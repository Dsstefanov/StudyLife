@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.print.css" media="print">
@endsection
@section('js')
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
    <script>

    </script>
@endsection
@section('content')

    <!--Events-->
    {{--  Vars are events, parties, travels, learning  --}}
    {{--TODO Calendar to be implemented--}}
    {{--<div class="top-offset"></div>
    <div class="row">
        <div class="col s12 m6 l6 offset-l1 offset-m1">

            <div id='calendar'></div>
        </div>
    <div class="col s12 l4 m4 offset-l1 offset-m1 offset-calndar">
        <div id="event_content">
            Click on an event to see a brief description of it
        </div>
    </div>
    </div>--}}
    <div class="row">
        <div class="col s12 m12 l12">
            <h2 class="center"><b><i>Incoming events</i></b></h2>
        </div>
    </div>
    <div class="row top-offset">
        <div class="col s12 m6 l6">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                        <div class="center">
                            <a href="">Link to nemtilmeld</a>
                        </div>
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col s12 m6 l6">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                        <div class="center">
                            <a href="">Link to nemtilmeld</a>
                        </div>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l6">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                        <div class="center">
                            <a href="">Link to nemtilmeld</a>
                        </div>
                        </p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="col s12 m6 l6">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <img src="pictures/party1.jpg" alt="placeholderImage" class="collapsible-header responsive-img">
                    <div class="collapsible-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                        <div class="center">
                            <a href="">Link to nemtilmeld</a>
                        </div>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection