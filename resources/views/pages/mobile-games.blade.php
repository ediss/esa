@extends('layout.main')

@section('banner-image', 'game-background-image')
@section('banner-text', 'Mobile Games')

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-12 col-xl-8 offset-xl-2 text-under-banner">
        <p>EasySwipe (TM) is a lightweight HTML5 game family that integrates seamlessly into your sportsbook or gaming site. Super fast performance and open sessions allow players to swipe in and swipe out, enjoying the best quality casino games without disrupting the sports betting experience.</p>
        <p>The games proven cross-selling capacity, without cannibalisation, helps sportsbooks to prolong screen time and add revenue.</p>
        <p>All EasySwipe games use our certified RNG, are ADM compliant and can be integrated as standalone games in your casino.</p>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8 col-lg-8 offset-2 mt-5">
        <div class="col-md-6 col-lg-5 float-left">
            <img src="{{url('')}}/images/Games/blackjack.png" class = "img-fluid" alt="">
        </div>

        <div class="col-md-6 col-lg-7 float-right blackjack">
            <h4>BLACKJACK</h4>
            <p class = "mt-5">Our classic blackjack game offers a 6 option gamble round. This lightweight HTML5 game has an intuitive interface and single hand ergonomics.</p>
            <div class="my-list black-jack-list">
                <ul>
                    <li>EasySwipe(TM) game</li>
                    <li>Intuitive portrait gameplay</li>
                    <li>Responsive design</li>
                    <li>Bonus gamble round</li>
                    <li>Game statistics</li>
                    <li>Game history</li>
                </ul>
            </div>

            <div class="buttons col-md-12 col-lg-12 mt-5">
                <div class="col-md-4 col-lg-5 p-3 text-center float-left btn-blackjack-mobile">
                    <a href="#">Game Demo>></a>
                </div>

                <div class="col-md-4 col-lg-5 p-3 text-center float-right btn-blackjack-tablet">
                    <a href="#">EasySwipe Demo>></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8 col-lg-8 offset-2 mt-5">
        <div class="col-md-6 col-lg-5 float-left">
            <img src="{{url('')}}/images/Games/roulette.png" class = "img-fluid" alt="">
        </div>

        <div class="col-md-6 col-lg-7 float-right roulette">
            <h4>ROULETTE</h4>
            <p class = "mt-5">This classic European roulette brings the real casino experience, perfectly designed for mobile screens and fast gameplay.</p>
            <div class="my-list roulette-list">
                <ul>
                    <li>EasySwipe(TM) game</li>
                    <li>Responsive design</li>
                    <li>Racetrack betting</li>
                    <li>Game statistics, Hot and cold numbers?</li>
                    <li>Game history</li>
                    <li>Multi-lingual?</li>
                </ul>
            </div>
            <div class="buttons mt-5">
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-4 col-lg-5 p-3 text-center float-left btn-roulette-mobile">
                            <a href="#">Game Demo>></a>
                    </div>

                    <div class="col-md-4 col-lg-5 p-3 text-center float-right btn-roulette-tablet">
                            <a href="#">EasySwipe Demo>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-md-8 col-lg-8 offset-2 mt-5">
        <div class="col-md-6 col-lg-5 float-left">
            <img src="{{url('')}}/images/Games/slot.png" class = "img-fluid" alt="">
        </div>

        <div class="col-md-6 col-lg-7 float-right fruit-slot">
            <h4>FRUIT STAXX</h4>
            <p class = "mt-5">Our enticing fruit-themed slot is designed for casual gameplay with an immersive user experience. Our mobile-first thinking ensures this game caters for first-time players and slot aficionados.</p>
            <div class="my-list fruit-slot-list">
                <ul>
                    <li>EasySwipe(TM) game</li>
                    <li>5x6 matrix</li>
                    <li>Stacked wins feature</li>
                    <li>Cloned reels feature</li>
                    <li>High hit rate</li>
                    <li>96.6%</li>
                </ul>
            </div>
            <div class="buttons mt-5">
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-4 col-lg-5 p-3 text-center float-left btn-roulette-mobile">
                            <a href="#">Game Demo>></a>
                    </div>

                    <div class="col-md-4 col-lg-5 p-3 text-center float-right btn-roulette-tablet">
                            <a href="#">EasySwipe Demo>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-8 offset-2 mt-5 mb-5">
        <img src="{{url('')}}/images/Games/roadmap.png" class = "img-fluid" alt="">
    </div>
</div>


@endsection