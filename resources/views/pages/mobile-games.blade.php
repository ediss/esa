@extends('layout.main')

@section('banner-image', 'game-background-image')
@section('banner-text', 'Mobile Games')

@section('content')

<div class="row my-content">
    <div class="col-md-12 col-lg-12 col-xl-8 offset-xl-2 roboto-light note bq-success mb-4">

        <p>Our games are designed exclusively for mobile and tablets.</p>
        <p>EasySwipe&trade; is a lightweight HTML5 mobile-first game family that integrates seamlessly into your sportsbook or gaming site. Super fast performance and open sessions allow players to swipe in and out, enjoying the best quality casino games without disrupting the sports betting experience.</p>
        <p>The games proven cross-selling capacity, without cannibalisation, helps sportsbooks to prolong screen time and add revenue.</p>
    </div>

    <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2  p-0">
        <div class="embed-responsive embed-responsive-16by9">
            <video src="videos/Games.mp4" playsinline loop muted autoplay controls></video>
        </div>
    </div>
</div>

<div class="row mb-5" id = "blackjack">
<div class="col-md-12 col-lg-12 col-xl-8 offset-xl-2 mt-5 box-shadow p-md-3">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-5 offset-sm-3 offset-md-0 black-jack">
                    <img src="{{url('')}}/images/Games/blackjack.png" class = "img-fluid mt-3" alt="">
            </div>

            <div class="col-md-6 col-lg-7 mb-3 fruit-slot">
                <h4 class="ml-3 text-center text-md-left mt-4 mt-md-0">BLACKJACK</h4>
                <p class="ml-3 mb-3 mt-2 roboto-light">Our classic blackjack game offers a 6 option gamble round. This lightweight HTML5 game has an intuitive interface and single hand ergonomics.</p>
                <div class="my-list black-jack-list">
                    <ul>
                        <li>EasySwipe&trade; game</li>
                        <li>Intuitive portrait gameplay</li>
                        <li>Responsive design</li>
                        <li>Bonus gamble round</li>
                        <li>Game statistics</li>
                        <li>Game history</li>
                    </ul>
                </div>
                <div class="buttons mt-lg-5 mt-md-2 ml-3">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <a class="col-md-5 p-3 text-center text-white btn-blackjack-mobile" href="#" onclick = "openBlackJack()">GAME &gt;&gt;</a>  
                            <a class="col-md-5 p-3 text-center text-dark  ml-md-1 ml-lg-3 mt-2 mt-md-0 btn-blackjack-tablet" href="#" onclick = "openEasySwipeBj()">EasySwipe &gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="row mb-5" id = "slot">
    <div class="col-md-12 col-lg-12 col-xl-8 offset-xl-2 mt-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-5 offset-sm-3 offset-md-0">
                <img src="{{url('')}}/images/Games/slot.png" class = "img-fluid" alt="">
            </div>

            <div class="col-md-6 col-lg-7  fruit-slot">
                <h4 class = "ml-3 text-center text-md-left mt-4 mt-md-0">FRUIT STAXX</h4>
                <p class="ml-3 mb-3 mt-2 roboto-light">Our enticing fruit-themed slot is designed for casual gameplay with an immersive user experience. Our mobile-first thinking ensures this game caters for first-time players and slot aficionados.</p>
                <div class="my-list fruit-slot-list">
                    <ul>
                        <li>EasySwipe&trade; game</li>
                        <li>5x6 matrix</li>
                        <li>Stacked wins feature</li>
                        <li>Cloned reels feature</li>
                        <li>High hit rate</li>
                        <li>96.6% RTP</li>
                    </ul>
                </div>
                <div class="buttons mt-lg-5 mt-md-2 ml-3">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <a class="col-md-5 p-3 text-center text-white btn-roulette-mobile" href="#" onclick="openSlot()">GAME &gt;&gt;</a>
                            <a class="col-md-5 p-3 text-center text-dark ml-md-1 ml-lg-3 mt-2 mt-md-0 btn-roulette-tablet" href = "#" onclick = "openEasySwipeBj()">EasySwipe &gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row mb-5" id = "roulette">
    <div class="col-md-12 col-lg-12 col-xl-8 offset-xl-2 mt-5 box-shadow p-md-3" >
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-5 offset-sm-3 offset-md-0">
                <img src="{{url('')}}/images/Games/roulette.png" class = "img-fluid mt-3" alt="">
            </div>

            <div class="col-md-6 col-lg-7 mb-3 mb-sm-0 roulette">
                <h4 class = "ml-3 text-center text-md-left mt-4 mt-md-0">ROULETTE</h4>
                <p class="ml-3 mb-3 mt-2 roboto-light">This classic European roulette brings the real casino experience, perfectly designed for mobile screens and fast gameplay.</p>
                <div class="my-list roulette-list">
                    <ul>
                        <li>EasySwipe&trade; game</li>
                        <li>Responsive design</li>
                        <li>Racetrack betting</li>
                        <li>Game statistics, Hot and cold numbers</li>
                        <li>Game history</li>
                        <li>Multi-lingual</li>
                    </ul>
                </div>
                <div class="buttons mt-lg-5 mt-md-2 ml-3">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <a class="col-md-5 p-3 text-center text-white btn-roulette-mobile" href="#" onclick="openRoulette()">GAME &gt;&gt;</a>
                            <a class="col-md-5 p-3 text-center text-dark ml-md-1 ml-lg-3 mt-2 mt-md-0 btn-roulette-tablet" href = "#" onclick = "openEasySwipeBj()">EasySwipe &gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row mb-5" id = "goalMine">
    <div class="col-md-12 col-lg-12 col-xl-8 offset-xl-2 mt-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-5 offset-sm-3 offset-md-0">
                <img src="{{url('')}}/images/Games/goalMine.png" class = "img-fluid" alt="">
            </div>

            <div class="col-md-6 col-lg-7  fruit-slot">
                <h4 class = "ml-3 text-center text-md-left mt-4 mt-md-0">GOAL MINE</h4>
                <p class="ml-3 mb-3 mt-2 roboto-light">GoalMine&trade; is a football themed instant
                    win game, similar to the original minesweeper. 
                   It is played on a soccer field with a 5x6 matrix.</p>
                <div class="my-list black-jack-list">
                    <ul>
                        <li>EasySwipe&trade; game</li>
                        <li>Fast action sports theme</li>
                        <li>Intuitive portrait gameplay</li>
                        <li>Win up to 20 times initial bet</li>
                        <li>Rebuy into the game with a corner kick</li>
                        <li>92% RTP</li>
                    </ul>
                </div>
                <div class="buttons mt-lg-5 mt-md-2 ml-3">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <a class="col-md-5 p-3 text-center text-white btn-blackjack-mobile" href="#">Coming Soon</a>
                            <a class="col-md-5 p-3 text-center text-dark ml-md-1 ml-lg-3 mt-2 mt-md-0 btn-blackjack-tablet" href = "#">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="row mt-5">
    <div class="col-12 col-md-12 col-lg-8 offset-lg-2 mt-5 mb-5">
        <img src="{{url('')}}/images/Games/roadmap.png" class = "img-fluid" alt="">
    </div>
</div>


@endsection

@section('footer-script')
<script>
    function openSlot() {
      window.open("https://test.esagaming.it/esaslotmachine/", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=700,width=491,height=860");
    }
    
    function openBlackJack() {
      window.open("https://test.esagaming.it/esablackjack/?token=PLAYFORFUN", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=700,width=456,height=774");
    }
    
    function openRoulette() {
      window.open("https://test.esagaming.it/esaroulette", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=700,width=456,height=774");
    }
    
    function openEasySwipeBj() {
      window.open("https://demo.esagaming.it/", "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=100,left=700,width=456,height=774");
    }
    
    </script>


@endsection