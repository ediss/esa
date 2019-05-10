<footer>
    <div class="row footer">
        <div class="col-sm-12 pt-5">
            <div class="row mb-5" >
                <div class="col-lg-10 offset-1 ">
                    <div class="row">
                        <div class="col-8 col-md-2 col-lg-6  offset-lg-3  text-center">
                            <img src="{{url('')}}/images/footer-arrow.png" alt="" id = "back2Top">
                        </div>
                    </div>

                </div>
                <div class="col-10 offset-1">
                <hr style="border-top: 2px solid #b1b1b1;">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-10 col-md-4 col-lg-4 offset-1 offset-md-0  pb-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.1353400372627!2d20.45745961591088!3d44.81880737909856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab3666c994f%3A0x6df24bd01862022b!2z0JHRgNCw0ZvQtSDQiNGD0LPQvtCy0LjRm9CwIDJhLCDQkdC10L7Qs9GA0LDQtCAxMTAwMA!5e0!3m2!1ssr!2srs!4v1557481463094!5m2!1ssr!2srs" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <div class="col-10 col-md-4 col-lg-4 offset-1 offset-md-0">
                                <div class="col-10 col-lg-12">
                                    <div class="footer-list roboto-light text-center">
                                        <ul>
                                            <li><a href="">Home</a></li>
                                            <li><a href="">Poker Network</a></li>
                                            <li><a href="">Game Aggregator System</a></li>
                                            <li><a href="">Work with us</a></li>
                                            <li><a href="">About us</a></li>
                                            <li><a href="">Contact us</a></li>
                                        </ul>
                                        <p>ESA Gaming is commited to gaming that is fun, safe and secure. High performing HTML5 gaming products with a strong focus on mobile</p>
                                    </div>
                                </div>
                        </div>

                        <div class="col-10 col-md-4 col-lg-4 col-xl-2 offset-1 offset-md-0">
                            <div class="row">
                                <div class="col-12 col-lg-10">
                                    <img src="{{url('')}}/images/Logo-EsaGaming.png" class = "img-fluid" alt="">
                                </div>
                                <div class="col-12 col-lg-10 mt-2 text-center text-sm-left">
                                    <p>  &copy; 2019 Bet Responsibly.</p>
                                </div>
                            </div>

                            <p class = "text-center roboto-light text-sm-left">ADM compilant <br/>Quinel Certifed GL11</p>

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <div class="row black">
        <div class=" col-sm-12 pt-5">
            <div class="col-md-4 col-lg-4 col-xl-2 offset-md-4 offset-xl-5  text-center">
                <img src="{{url('')}}/images/footer.png" class = "img-fluid" alt="">
            </div>
        </div>
    </div>
</footer>

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