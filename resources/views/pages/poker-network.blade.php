@extends('layout.main')

@section('banner-image', 'poker-background-image')
@section('banner-text', 'ESA Poker Network')

@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2 roboto-light">
        <p>ESA Poker Network is the easiest and most intuitive modernized poker on the market, able to attract  both amateur and experienced players in a dynamic and secure environment,thanks also to a large number of promotional tools suitable for all <br/> types of poker players.</p>
    </div>

    <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe  class="embed-responsive-item" src="videos/PokerRoomEN.mp4" allowfullscreen ></iframe>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-12 p-0">

        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12 col-lg-10  col-xl-8  offset-lg-1 offset-xl-2 poker-heading">
                      <h4 class="ml-4">What do we offer?</h4>

                      <div class="row">
                        <div class="col-lg-6  mt-5 my-list poker-list">
                                <ul>
                                    <li>Downloadable client for both Windows and Mac</li>
                                    <li>HTML5 solution for all mobile phones, tablets and browsers</li>
                                    <li>Fully customizable lobby with themes adaptable to your brand</li>
                                    <li>Intuitive navigation in the lobby and on easily controllable playing tables</li>
                                    <li>Light, fast and reliable software, easy to download, even on older operating systems</li>
                                    <li>Considerable opportunities for Operators to manage a highly customized Marketing environment</li>
                                    <li>Back office featuring wide-ranging reports and numerous filters that makes the work of fraud department, poker and tournament managers flow smoothly</li>
                                    <li>Multi-currency and multi-lingual software: English, Italian, Chinese, Serbian/Croatian, Russian, German and others on request</li>
                                </ul>
                            </div>

                            <div class="col-sm-8 col-md-6 col-lg-6 mt-5 offset-sm-2 offset-md-0 offset-lg-0">
                                <img src="{{url('')}}/images/Poker/poker-screensots.png" class = "img-fluid" alt="">
                            </div>
                      </div>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 poker-heading">
        <div class="row">
            <div class="col-lg-12">
                <h4>Poker back office</h4>
                <p class = "mt-5 roboto-light">Our powerful back office allows easy tracking and player management.<br/>The ESA Gaming system gives you the possibility to create and manage cash tables and tournaments from the back office, private tables for partners, groups or affiliates. <br/> High-level reports and the intuitive functions of our back office make Operators fully independent! Moreover, all reports can be quickly downloaded in excel format for further analysis.</p>
            </div>

            <div class="col-lg-6 mt-4">
                    <h4>Fraud department</h4>
                    <p class = "roboto-light">Our fraud department along with the poker team are constantly working with Operators to optimize fraud prevention practices and get the best results.Our network represents a healthy ecosystem, managed with strong tools against collusion and chip dumping.</p>
                </div>

                <div class="col-lg-6 mt-4">
                    <h4>Marketing</h4>
                    <p class = "roboto-light">Our stimulating promotional system gives you instruments to reward your players in real time, helping you to attract and retain recreational players with a number of innovative promotions in today’s poker market!</p>
                </div>
        </div>


    </div>
</div>
@endsection