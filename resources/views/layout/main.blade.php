<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/custom.css">
        @yield('links')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{url('')}}/js/jquery.rotate.js"></script>
    </head>

    <body>


        <div class="container-fluid">
            <div class="row">
                <div class = "col-md-12 col-lg-12 p-0 img-fluid @yield('banner-image')">
                    <div class="col-md-8 offset-2" >
                        <div class="container mt-3">
                            <div class="row">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 col-xl-3 float-left">
                                    <a href="{{url('')}}" class=" navbar-brand mt-2">
                                        <img class = "img-fluid" src = "{{url('')}}/images/esa-logo.png">
                                    </a>
                                </div>
                                <div class="col float-right">
                                    @include('inc.nav')
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-3 col-md-6 col-lg-6 offset-3 text-center font-weight-bold mt-5">
                        <h1 class  style = "color:white;"> @yield('banner-text')</h1>
                    </div>
                </div>
            </div>

            @yield('content')

            @include('inc.footer')
        </div>

    </body>
</html>