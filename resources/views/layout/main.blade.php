<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/custom.css">
        @yield('links')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class = "col-md-12 col-lg-12  img-fluid @yield('banner-image')">
                    <div class="row mt-3">
                        <div class="col-lg-2"></div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 ">
                            <a href="{{url('')}}" class=" navbar-brand mt-2">
                                <img class = "img-fluid" src = "{{url('')}}/images/esa-logo.png">
                            </a>
                        </div>
                        <div class="col-md-8 float-right " >
                            @include('inc.nav')
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-6 offset-3 text-center font-weight-bold banner-heading mt-xl-5">
                        <h1 class  > @yield('banner-text')</h1>
                    </div>
                </div>
            </div>

            @yield('content')

            @include('inc.footer')
        </div>

    </body>
</html>