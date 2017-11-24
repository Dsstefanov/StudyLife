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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" property="stylesheet" type="text/css" href="css/admin.css" >
</head>
<body>

<div class="navbar-fixed">
    <nav class="custom-nav ">
        <div class="nav-wrapper custom-nav">
            <a href="{{url('/')}}"><img class="brand-logo center brand" src="pictures/logo.png" alt="logo" ></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li ><a class="main" href="#" >Dashboard</a></li>
                <li ><a class="main" href="{{url('users')}}" >Manage users</a></li>
                <li ><a class="main" href="#" >Manage subscribers</a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{url('profile')}}" class="main">Profile</a></li>
                    <li ><a class="main" href="{{ url('/logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </ul>

            <ul id="slide-out" class="side-nav">
                <li><a href="#" >Dashboard</a></li>
                <li><a href="#" >Manage users</a></li>
                <li><a href="#">Manage subscribers</a></li>
                <li class="divider"></li>
                <li><a href="{{url('profile')}}" class="main">Profile</a></li>
                    <li id="member"><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
            <a id = "btncolapse" href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>


<main>
    @yield('content')
</main>
</body>
<footer>
    © 2016 StudyLife All Rights Reserved
</footer>
<!-- Compiled and minified JavaScript -->


</html>
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous" >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="js/admin.js"></script>
