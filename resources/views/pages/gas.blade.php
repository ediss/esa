@extends('layout.main')


@section('banner-image', 'gas-background-image')
@section('banner-text', 'Game Aggregator System (GAS)')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-under-banner offset-lg-2">
        <p>Our single starting integration allows operators to concentrate on their players by adding new games without further integration.
           We offer a wide selection of Casino, Live Dealer and Poker content to operators and we give them the possibility to add a huge variety of games to their own platform,
           though a simple single integration.
        </p>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 p-0">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12 col-lg-8 offset-lg-2 gas-heading">
                    <h4>Why choose GAS?</h4>
                    <img src = "{{url('')}}/images/GAS/gas-graphicon.png" class = "img-fluid">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12 col-lg-8 offset-lg-2 text_under_banner ">
                    <p>We developed technology with one goal to facilitate the operational managment for operators.<br/>
                       The GAS platform fives you the posibility to launch casino and gaming content on the market, from best providers,though simple APIs.
                    </p>

                    <p>Access to a wide range of games from major Game Studios and the freedom to choose different content that matches your players’ tastes. Multichannel (desktop & mobile) content on the GAS platform is constantly being added to and can be launched with minimal efforts from an operator perspective.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-lg-8 col-xl-8 offset-lg-2 offset-xl-2 offset-md-1 gas-heading">
        <h4>Dynamic Back Office</h4>
        <p class = "text_under_banner mt-5">The back office gives fast and intuitive access to customer data in a single solution. Customer Service and Managers can control customer history, game sessions and bonus campaigns for different providers directly from our back office.</p>
        <div class="col-md-8 col-lg-6 col-xl-6 float-left mt-5 my-list gas-list" >
            <ul>
                <li>Intelligent data management, promotional campaigns planning, customer retention tools</li>
                <li>User friendly control panel lets you easily view and keep track of game sessions in real time</li>
                <li>Analytical database gives you the possibility to extract any type of data with the help of multiple parameters and filters at your disposal</li>
                <li>Real-time data sharing with the Operators</li>
            </ul>
        </div>

        <div class="col-xs-6 col-md-4 col-lg-6 col-xl-6 float-right  mt-5">
            <img src="{{url('')}}/images/GAS/gas-backoffice.png" class = "img-fluid" alt="">
        </div>
    </div>

    <div class="col-md-8 col-lg-8 col-xl-8 mt-5 offset-2 gas-heading">
        <div class="col-md-6 col-lg-6 col-xl-6 float-left mt-4 my-list gas-list">
            <h4>Access Regulated Markets</h4>
            <ul class = "mt-5">
                <li>Authorized to operate in various regulated jurisdictions</li>
                <li>ADM compliant</li>
                <li>Quinel Certified GL11</li>
            </ul>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-6 float-right mt-4 mb-5 my-list gas-list gas-heading">
            <h4>Direct marketing management for Operators</h4>
            <ul class = "mt-5">
                <li>One integration, many providers</li>
                <li>One single back office</li>
                <li>Managing and customizing your own advertising campaigns</li>
                <li>New content without further integration</li>
            </ul>
        </div>
    </div>


</div>
<hr>
<!--
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-under-banner offset-lg-2">
        <div id = "galleryThumbs">
            <div class="row seven-cols" id = "scroll-to">
                @foreach($partners as $partner)
                    <div class="column-7  p-4 images">
                        <img src = "{{url($partner->img_url)}}" class = "img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div> -->

<div class="row mt-4">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-center text-under-banner offset-lg-2">
    <h4>Our considerable portfolio includes hundreds of titles from over 13 major Game Studios, including:</h4>
        <div class="row eight-cols mt-5" id = "scroll-to">
            @foreach($partners as $partner)
                <div class="column-8  p-3 images">
                    <img src = "{{url($partner->img_url)}}" class = "img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection