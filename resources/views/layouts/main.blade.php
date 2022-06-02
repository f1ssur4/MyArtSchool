<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @section('topbar')
        <nav class="navbar navbar-expand-lg" style="background-color: peachpuff">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: blueviolet;" href="#"><b>MyArts</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" style="color: darkmagenta" href="{{route('/')}}"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: darkmagenta" href="{{route('instructors.index')}}"><b>Our instructors</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: darkmagenta" href="{{route('arts.index')}}"><b>Arts</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: darkmagenta" href="{{route('schools.index')}}"><b>Schools</b></a>
                        </li>
                    </ul>
                    <span class="navbar-text">

                        <a class="nav-link" href="{{route('request')}}"><button class="btn btn-outline-primary me-2" style="color: blueviolet;" type="button"><b>Leave a request to contact you</b></button></a>
      </span>
                </div>
            </div>
        </nav>
    @show
    <div class="content" style="margin-top: 20px; margin-bottom: 100px;">
        @yield('content')
    </div>
    @section('bottom')

        <div id="copyright" class="botbar" style="position: fixed; bottom: 0; left: 0; width: 100%">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <p style="margin-left: 42%">&copy; Untitled. All rights reserved</p>
                    </div>
                </div>
            </nav>
            </center>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    @show
</body>
</html>
