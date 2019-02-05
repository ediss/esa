@extends('layout.main')

@section('main_banner')
<img src = "{{url('')}}/images/Poker/poker-intro.png" class="img-fluid">
@endsection

@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8 col-xl-8 offset-2">
        <p>ESA Poker Network is the easiest and most intuitive modernized poker on the market, able to attract  both amateur and experienced players in a dynamic and 
           secure environment,thanks also to a large number of promotional tools suitable for all types of poker players.
        </p>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 p-0">

        <div class="jumbotron">
            <div class="row">
                <div class="col-lg-8 offset-2">
                  
                        <h4>What do we offer?</h4>
                        <div class="col-lg-6 float-left  my-list">
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

                        <div class="col-lg-4 float-right">
                            <img src="{{url('')}}/images/Poker/poker-illustration.png" class = "img-fluid" alt="">
                        </div>
                    
                </div>
                    
            </div> 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 offset-2">
        <div class="row">
            <div class="col-lg-12">
                <h4>Poker back office</h4>
                <p>Our powerful back office allows easy tracking and player management.The ESA Gaming system gives you the possibility to create and manage cash tables and tournaments from the back office, private tables for partners, groups or affiliates.High-level reports and the intuitive functions of our back office make Operators fully independent! Moreover, all reports can be quickly downloaded in excel format for further analysis.</p>
            </div>

            <div class="col-lg-6 mt-4">
                    <h4>Fraud department</h4>
                    <p>Our fraud department along with the poker team are constantly working with Operators to optimize fraud prevention practices and get the best results.Our network represents a healthy ecosystem, managed with strong tools against collusion and chip dumping.</p>
                </div>

                <div class="col-lg-6 mt-4">
                    <h4>Markeeting</h4>
                    <p>Our stimulating promotional system gives you instruments to reward your players in real time, helping you to attract and retain recreational players with a number of innovative promotions in today’s poker market!</p>
                </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 mt-5 last-p">
                <p>Join our poker network with high traffic cash tables, Texas Hold’em, Omaha, Omaha Hi Lo, Telesina, 32 Cards, Instapoker (fast poker) along with lots of GTD tournaments and daily freerolls.</p>
            </div>
        </div>     
    </div>
</div>
@endsection