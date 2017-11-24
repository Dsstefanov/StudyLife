<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StudyLife') }}</title>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}materialize/css/materialize.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('css')
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous" >
    </script>
    @yield('js')
</head>
<body>
<div class="navbar navbar-fixed">
    <nav class="custom-nav">
        <div class="nav-wrapper custom-nav">
            <a href="{{url('/')}}">
                <img class="brand-logo center brand hide-on-small-only" src="{{asset('/')}}pictures/logo.png" alt="logo" >
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li ><a id="main" class="main" href="{{url('about')}}">What is StudyLife?</a></li>
                <li ><a id="main" class="main" href="{{url('activities')}}">Activities</a></li>
                <li ><a id="main" class="main" href="{{url('events')}}">Events</a></li>
                @if(!Auth::guest())
                    <li><a id="main" href="{{route('events.create')}}" >Create event</a></li>
                @endif
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li id="member"><a href="{{url('members')}}">Become a member</a></li>
                @if(!Auth::guest())
                    <li style="background: #90caf9"><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </ul>

            <ul class="left hide-on-large-only">
                <li><a href="{{url('about')}}"><i id="main" class="large material-icons">info</i></a></li>
                <li><a href="{{url('activities')}}"><i id="main" class="large material-icons">stars</i></a></li>
                @if(!Auth::guest())
                    <li><a id="main" href="{{route('events.create')}}" ><i id="main" class="large material-icons">launch</i></a></li>
                @endif
            </ul>


                <a class="brand-logo center" href="{{url('/')}}"><i id="main" class="large material-icons hide-on-med-and-up">view_carousel</i></a>


        <ul class="right hide-on-large-only">
            <li><a href="{{url('events')}}"><i id="main" class="large material-icons">today</i></a></li>
            <li><a href="{{url('members')}}"><i id="main" class="large material-icons">perm_identity</i></a></li>
            @if(!Auth::guest())
                <li id="main"><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i id="main" class="large material-icons">not_interested</i>
                    </a>
                </li>
            @endif
        </ul>
        </div>
    </nav>
</div>
@yield('content')
{{--<div id="loginModal" class="modal bottom-sheet">
    <form action="{{url('/login')}}" method="POST" id="loginForm">
        <div class="row">
            <div id="email-div" class="">
                {{ csrf_field() }}
                <div class="input-field col s4 offset-s1 col m4 offset-m1 col l4 offset-l1">
                    <label for="email">Email</label>
                    <input  class="validate" id="email" type="email" title="Please enter you email" name="email">
                    <div id="form-errors-email" class="has-error"></div>
                    <strong id="form-errors-email"></strong>

                </div>
            </div>
            <div id="password-div">
                <div class="input-field col s4  col m4 col l4 ">
                    <label for="password">Password</label>
                    <input class="validate" type="password" name="password" id="password">
                    <strong id="form-errors-password"></strong>
                </div>
            </div>
            <div id="login-errors">
                <strong id="form-login-errors"></strong>
            </div>
            <div class="col s2 col m2 col l2">
                <!--inline style-->
                <button class="btn" style="margin-top: 1.4em" type="submit" name="action">Login<i class="material-icons right">send</i></button>
            </div>
        </div>
    </form>
</div>--}}
<!-- Compiled and minified JavaScript -->
<script src="{{ asset('/') }}materialize/js/materialize.js"></script>
<script src="{{ asset('/') }}js/master.js"></script>

</body>
<footer class="page-footer">
    <div class="container top-offset">
        <div class="row">
            <div class="col l4 s12 ">
                <div class="row">
                    <div class="left col offset-l4">
                        <i class="tiny material-icons">location_on</i><span style="margin-left: 10px">Rantzausgade 4</span>
                    </div>
                </div>
                <div class="row">
                    <div class="left col offset-l4">
                        <i class="tiny material-icons">call</i><span style="margin-left: 10px">91 81 33 82</span>
                    </div>
                </div>
                <div class="row">
                    <div class="left col offset-l4">
                        <i class="tiny material-icons">email</i><span style="margin-left: 10px">mail@mail.com</span>
                    </div>
                </div>

            </div>
            <div class="col l4 offset-l4 s12">
                <div class="row">
                    <span>Follow us on the social medias</span>
                </div>
                <a target="_blank" class="main" href="https://www.facebook.com/studylifenu"><img src="{{asset('/')}}icons/facebook.svg" alt="facebook"></a>
                <a target="_blank" class="main" href="#"><img src="{{asset('/')}}icons/snapchat.svg" alt="snapchat"></a>
                <a target="_blank" class="main" href="https://www.instagram.com/studylifenu"><img src="{{asset('/')}}icons/instagram.jpg" alt="instagram" style="height: 40px; width: 40px"></a>
            </div>
        </div>
    </div>
</footer>
</html>
