<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/custom.css">

        @yield('links')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row mb-3">
                <div class = "col  @yield('banner-image')" >
                    <div class="row mt-md-3">
                        <div class="col-12 col-sm-12 col-md-12" >
                            @include('inc.nav2')
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 offset-lg-3 mt-xl-5 text-center font-weight-bold banner-heading">
                        <h1> @yield('banner-text')</h1>
                    </div>
                </div>
            </div>

            @yield('content')

            @include('inc.footer')
        </div>

    </body>
</html>