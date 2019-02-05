@extends('layout.main')

@section('main_banner')
<img src = "{{url('')}}/images/GAS/gas-intro.png" class="img-fluid">
@endsection

@section('content')
<div class="row pt-4">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8  offset-lg-2 p-5" >
        <p>Our single starting integration allows operators to concentrate on their players by adding new games without further integration.
           We offer a wide selection of Casino, Live Dealer and POker content to opetaors and we give them the possibility to add a huge variety of games to their own platform,
           though a simple single integration.
        </p>
        <p>Our considerable portfolio includes hundreds of titles from over 10 major Game Studios, including:</p>

    
        <div class="row">
            @foreach($partners as $partner)
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <img src = "{{url($partner->img_url)}}" class = "img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="row">    
    <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 p-0">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12 col-lg-8 offset-lg-2">
                    <h4>Why choose GAS?</h4>
                    <img src = "{{url('')}}/images/GAS/gas-graphicon.png" class = "img-fluid">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12 col-lg-8 offset-lg-2">
                    <p>We developed technology with one goal to facilitate the operational managment for operators.<br/>
                       The GAS platform fives you the posibility to launch casino and gaming content on the market, from best providers,though simple APIs.
                    </p>
                    
                    <p>Access to a wide range of games from major Game Studios and the freedom to choose different content that matches your players’ tastes. Multichannel (desktop & mobile) content on the GAS platform is constantly being added to and can be launched with minimal efforts from an operator perspective.
                       We offer games available in HTML5 and accessible from smartphones and tablets!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-10 col-lg-8 col-xl-8 offset-lg-2 offset-xl-2 offset-md-1">
        <h4>Dynamic Back Office</h4>
        <p>The back office gives fast and intuitive access to customer data in a single solution. Customer Service and Managers can control customer history, game sessions and bonus campaigns for different providers directly from our back office.</p>
        <div class="col-md-8 col-lg-6 col-xl-6 float-left mt-4 my-list" >
            <ul>
                <li>Intelligent data management, promotional campaigns planning, customer retention tools</li>
                <li>User friendly control panel lets you easily view and keep track of game sessions in real time</li>
                <li>Analytical database gives you the possibility to extract any type of data with the help of multiple parameters and filters at your disposal</li>
                <li>Real-time data sharing with the Operators</li>
            </ul>
        </div>

        <div class="col-xs-6 col-md-4 col-lg-6 col-xl-6 float-right  mt-4" >
            <div class="col-xl-6">
                <img src="{{url('')}}/images/GAS/gas-back-office.png" class = "img-fluid" alt="">
            </div>            
           
        </div>
    </div>

    <div class="col-md-8 col-lg-8 col-xl-8 offset-2">
        <div class="col-md-6 col-lg-6 col-xl-6 float-left mt-4 my-list">
            <h4>Access Regulated Markets</h4>
            <ul>
                <li>Authorized to operate in various regulated jurisdictions</li>
                <li>ADM compliant</li>
                <li>Quinel Certified GL11</li>
            </ul>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-6 float-right mt-4 my-list">
            <h4>Direct marketing management for Operators</h4>
            <ul>
                <li>One integration, many providers</li>
                <li>One single back office</li>
                <li>Managing and customizing your own advertising campaigns</li>
                <li>New content without further integration</li>
            </ul>
        </div>
    </div>


</div>


@endsection