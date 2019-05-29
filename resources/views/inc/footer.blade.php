<!-- Footer -->
<div class="footer row p-0">
    <footer class="col page-footer font-small unique-color-dark p-0">

        <div style="background-color: #8bc642;">

        <!-- <div style="background-color: #6351ce;"> -->
            <div class="container">

                <!-- Grid row-->
                <!-- <div class="row py-3 d-flex align-items-center"> -->
                    <!-- <div class="col-sm-6 offset-sm-3 text-center">
                        <img src="{{url('')}}/images/footer-arrow.png" alt="" id = "back2Top" class = "img-fluid">
                    </div> -->
                    <!-- Grid column -->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <!-- <div class="col-sm-6 offset-sm-3  mt-4 text-center">


                        <a class="fb-ic">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>

                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>

                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>

                        <a class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>


                    </div> -->
                    <!-- Grid column -->

                <!-- </div> -->
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">

                    <!-- Content -->
                    <img src="{{url('')}}/images/Logo-EsaGaming.png" class="img-fluid" alt="">
                    <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>ESA Gaming is commited to gaming that is fun, safe and secure. High perfoming mobile casino games like slots, blackjack, video poker, roulette...</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-3">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Games</h6>
                    <hr class="deep-green deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href = "{{route('mobile-games')}}#blackjack"> Black Jack</a>
                    </p>
                    <p>
                        <a href="{{route('mobile-games')}}#slot">Slot</a>
                    </p>
                    <p>
                        <a href="{{route('mobile-games')}}#roulette">Roulette</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-3" id="new-footer">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a  href="{{route('mobile-games')}}">Mobile Games</a>
                    </p>
                    <p>
                        <a  href="{{route('poker-network')}}">Poker Network</a>
                    </p>
                    <p>
                        <a  href="{{route('gas')}}">Game Aggregator <span>System</span></a>
                    </p>
                    <p>
                        <a  href="{{route('career')}}">Work with us</a>
                    </p>

                    <p>
                        <a  href="{{route('about-us')}}">About us</a>
                    </p>

                    <p>
                        <a  href="{{route('contact')}}">Contact us</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4 mt-3">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fas fa-home mr-3"></i> <br/>Valletta Buildings, 4th Floor, Suite 20, South Street, Valetta, VLT 1103, Malta</p>
                    <!-- <p><i class="fas fa-envelope mr-3"></i> <br/>info@esagaming.it</p> -->
                    <!-- <p><i class="fas fa-phone mr-3"></i> <br/> + 01 234 567 88</p> -->


                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <div class=" col-sm-12 ">
                <div class="col-sm-8  offset-2">
                    <div class="col-4 col-sm-6 col-md-2 col-lg-2  offset-4 offset-sm-3 offset-md-5 offset-lg-5">
                    <img src="{{url('')}}/images/footer.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>
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

<script>

/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

</script>