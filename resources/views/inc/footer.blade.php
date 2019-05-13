<footer>
    <div class="row footer">
        <div class="col-sm-12 pt-5">
            <div class="row mb-5" >
                <div class="col-lg-10 offset-lg-1">
                    <div class="row ">
                        <div class="col-6 col-md-8 footer-nav">
                            @include('inc.nav2')
                        </div>

                        <div class="col-4 col-lg-2 offset-4 offset-lg-1 text-center text-xl-right float-xl-right">
                            <img src="{{url('')}}/images/footer-arrow.png" alt="" id = "back2Top" class = "img-fluid">
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-10 offset-lg-1">
                <hr style="border-top: 2px solid #b1b1b1;">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-10 col-md-4 offset-1 offset-md-0">
                            <p>ESA Gaming is commited to gaming that is fun, safe and secure. High performing HTML5 gaming products with a strong focus on mobile</p>
                        </div>

                        <div class="col-10 col-md-4 offset-1 offset-md-0">
                                <div class="col-10 col-lg-12">
                                    <div class="footer-list text-center">
                                        <ul>
                                            <li class = "first">Our games</li>
                                            <li><a href = "{{route('mobile-games')}}"> Black Jack</a></li>
                                            <li><a href = "{{route('mobile-games')}}">Slot</a></li>
                                            <li><a href = "{{route('mobile-games')}}">Roulette</a></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>

                        <div class="col-10 col-md-4 col-xl-2 offset-1 offset-md-0">
                            <div class="row">
                                <div class="col-12 col-lg-10">
                                    <img src="{{url('')}}/images/Logo-EsaGaming.png" class = "img-fluid" alt="">
                                </div>
                                <div class="col-12 col-lg-10 mt-2 text-center text-sm-left">
                                    <p>  &copy; 2019 Bet Responsibly.</p>
                                </div>
                            </div>

                            <p class = "text-center text-sm-left">ADM compilant <br/>Quinel Certifed GL11</p>

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <div class="row black">
        <div class=" col-sm-12 pt-5">
            <div class="col-md-2 col-lg-2 col-xl-2 offset-md-5 offset-xl-5  text-center">
                <img src="{{url('')}}/images/footer.png" class = "img-fluid" alt="">
            </div>
        </div>
    </div>
</footer>
<script src="{{url('')}}/js/bootstrap.js"></script>

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