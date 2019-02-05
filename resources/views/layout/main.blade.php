<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
    </head>

    <body>
        
        <div class="container">
            <div class="row m-2" >
                <div class="col-md-6 col-lg-3 col-xl-3">
                    <a href="{{url('')}}" class=" navbar-brand m-0">
                        <img src = "{{url('')}}/images/esa-logo.png">
                    </a>
                </div>

              @include('inc.nav')
            </div>
        </div>


        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-12 p-0">
                    @yield('main_banner')
                </div>
            </div>

            @yield('content')
     
            @include('inc.footer')   
        </div>
    </body>
</html>