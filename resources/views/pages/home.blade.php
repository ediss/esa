<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/mdb.css">
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
                        <div class="col-12" >
                            @include('inc.nav')
                        </div>
                    </div>
            </div>
        </div>

        <div class = "row">
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2  mt-md-2 home-image-mt">
                    <div class="row mt-3">
                        
                        <div class="col-8 col-md-5 col-lg-5 offset-2 offset-md-0 mt-md-5 text-center text-md-left">
                            <h1 class ="animated fadeInLeftBig"><b>SIMPLE</b></h1>
                            <h1 class ="text-center text-sm-left animated  bounceInLeft "><b><i>FAST</i></b></h1>
                            <h1 class ="animated  fadeInLeftBig "><b>MOBILE</b></h1>
                            <p class = "mt-2">High performing HTML5 gaming  products with a strong focus on mobile.</p>
                            <div class="row animated zoomIn">
                                <a class="col-12  col-md-12 col-lg-9 mt-xl-5 text-center text-white find-out" href = "{{route('mobile-games')}}" >FIND OUT MORE>></a>
                            </div>
                        </div>

                        <div class="col-sm-8 col-12 col-md-7 col-lg-7 offset-sm-2 mb-3  offset-md-0 mt-5 animated zoomIn">
                                <img  src="{{url('')}}/images/Home/test.png" class = "img-fluid">
                        </div>
                    </div>

                </div>
        </div>



    </div>
<footer>
<script src="{{url('')}}/js/bootstrap.js"></script>
<script>
/* OPen when someone clicks on the "symbol inside the overlay */
function openNav() {
  document.getElementById("navbarNav").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("navbarNav").style.height = "0%";
    }
</script>
</footer>



</body>

</html>