<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class = "home-background">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-12 col-lg-12">
                <div class="row mt-3">
                    <div class="col-sm-d-none col-md-0 col-lg-2"></div>
                        <!-- <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 logo">
                            <a href="{{url('')}}" class=" navbar-brand">
                                <img class = "img-fluid" src = "{{url('')}}/images/Logo-EsaGaming.png">
                            </a>
                        </div> -->
                        <div class="col-12 col-sm-12 col-md-12" >
                            @include('inc.nav2')
                        </div>
                    </div>
            </div>
        </div>

        <div class = "row">
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2  mt-md-2 home-image-mt">
                    <div class="row mt-3">
                        <div class="col-8 col-md-5 col-lg-5 offset-2 offset-md-0 mt-md-5 text-center text-md-left">
                            <h1>SIMPLE.</h1>
                            <h1>FAST.</h1>
                            <h1>MOBILE.</h1>
                            <p class = "mt-2">High performing HTML5 gaming  products with a strong focus on mobile.</p>

                            <div class="col-12  col-md-12 col-lg-9 mt-xl-5 text-center find-out">
                                <a href = "{{route('mobile-games')}}" >FIND OUT MORE>></a>
                            </div>


                        </div>

                        <div class="col-sm-8 col-12 col-md-7 col-lg-7 offset-sm-2   offset-md-0 mt-5">
                            <img  src="{{url('')}}/images/Home/home-page-illustration.jpg" class = "img-fluid">
                        </div>
                    </div>

                </div>
        </div>

        <!-- <div class="row d-block d-md-none">
            <div class="mt-5">
                <div class="col-sm-6 col-md-4 col-lg-4 offset-sm-3 home-footer">
                    <img class="img-fluid" src="{{url('')}}/images/footer.png">
                </div>
            </div>
        </div>



        <div class="row d-none d-md-block">
            <div class="col-12 col-md-8 col-lg-8 offset-md-2  mt-5 mt-md-0 fixed-bottom">
                <div class="col-sm-12 col-md-4 col-lg-4 offset-md-4 home-footer">
                    <img class="img-fluid" src="{{url('')}}/images/footer.png">
                </div>
            </div>
        </div> -->


    </div>
<footer>

</footer>
<script src="{{url('')}}/js/bootstrap.js"></script>

</body>

</html>