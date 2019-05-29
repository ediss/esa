<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/mdb.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/css/custom.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


        @yield('links')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row mb-3">
                <div class = "col banner-img @yield('banner-image')" >
                    <div class="row mt-md-3">
                        <div class="col-12 meni" >
                            @include('inc.nav')
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 offset-lg-3 p-md-4 p-lg-3 p-xl-5 text-center font-weight-bold">
                        <div class = "banner-heading">
                            <h3> @yield('banner-text')</h3>
                            <p class = "p-under-banner-text d-none d-md-block">@yield('p-under-banner-text')</p>
                        </div>

                    </div>
                </div>
            </div>

            @yield('content')

            @include('inc.footer')
        </div>

    </body>
</html>