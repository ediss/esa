<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/custom.css">
</head>

<body>
    <div class="container-fluid home-background">
        <div class="row">
            <div class="col-md-12 col-lg-12">
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
            </div>
        </div>

        <div class = "row mb-4">
                <div class="col-lg-8 offset-2 home-image-mt float-left">
                    <div class="col-md-5 col-lg-5 float-left">
                        <h1>SIMPLE.</h1>
                        <h1>FAST.</h1>
                        <h1>MOBILE.</h1>
                        <p class = "mt-5">High performing HTML5 gaming  products with a strong focus on mobile </p>

                        <div class="col-md-8 col-lg-8 mt-5 text-center find-out" style = "border:2px solid white;">
                            <a href = "{{route('mobile-games')}}" >FIND OUT MORE>></a>
                        </div>
                    </div>

                    <div class="col-md-7 col-lg-7 float-right">
                        <img  src="{{url('')}}/images/Home/home-page-illustration.jpg" class = "img-fluid">
                    </div>
                </div>
        </div>


        <div class="row text-center">

            <div class="col-lg-2 offset-5 text-center home-footer">
                <footer>
                    <img class="img-fluid" src="{{url('')}}/images/footer.png">
                </footer>
            </div>
        </div>


    </div>
</body>

</html>