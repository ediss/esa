@extends('layout.main')

@section('banner-image', 'about-us-background-image')
@section('banner-text', 'About us')

@section('content')
<div class="row mb-5">
    <div class="col-md-8 col-lg-8  offset-md-2 roboto-light box-shadow p-4">
        <div class="col-md-12">
            <p>We are an independent gaming provider made of industry veterans. We all share the same simple idea, to create unique gaming products that will diversify your gaming portfolio and increase player engagement in your sportsbook or casino. From day one, we had the same strategy - to make high performing products with a mobile-first philosophy.</p>
            <p>We try to think differently without breaking the things that work. We are Simple. Mobile. Fast</p>
        </div>


        <div class="row mb-5 mt-5">
            <div class="col-md-6  my-list about-us-list">
                <ul>
                    <li>Enhance your sportsbook with our EasySwipe&trade; mobile games.</li>
                    <li>Manage hundreds of games, bonuses and free spins from one back office.</li>
                    <li>Build your poker network with our trusted download and mobile game clients.</li>
                </ul>
            </div>

            <div class="col-sm-8 col-md-6 offset-sm-2 offset-md-0 mt-4 mt-md-0">
                <img class="img-fluid" src="{{url('')}}/images/About/about_banner.png" alt="">
            </div>
        </div>

    </div>
</div>

@endsection