<footer>
    <div class="row footer">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-5">
            <div class="col-xs-4 col-lg-4 offset-lg-4 text-center">
                <img src="{{url('')}}/images/footer-arrow.png" class = "img-fluid" alt="" id = "back2Top">
            </div>

            <div class="col-lg-4 offset-lg-4 text-center mt-4">
                <p>&copy;ESA Gaming 2019 Bet Responsibly.</p> <br/>
                <p>ESA Gaming is commited to gaming that is fun, safe and secure.</p>
                <p>ADM compilant</p>
                <p>Quinel Certifed GL11</p>
            </div>
        </div>
    </div>

    <div class="row black">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-5">
            <div class="col-lg-4 offset-lg-4 text-center">
                <img src="{{url('')}}/images/footer-icons.png" class = "img-fluid" alt="">
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