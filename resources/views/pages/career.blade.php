@extends('layout.main')

@section('banner-image', 'work-with-us-background-image')
@section('banner-text', 'Work with us')

@section('content')
<div class="row mb-5">
    <div class="col-md-8 col-lg-8  offset-2 text-under-banner">
        <p>We put a lot of effort into building a company that promotes both profesionalism and joy in every day's work. We want to build a successful comapany by building great things. This means that we will always keep out startup culture alive without <br/> any compromises to the ambitious projects we undertake.</p>
    </div>
</div>

<div class="row mt-5 mb-5">
    <div class="col-md-8 offset-2">
        <div class="col-md-6 float-left my-list work-with-us-list">
            <h4>At the moment we have these positions opened</h4>

            <ul>
                <li>2D illustrator ( <a href = "#">See more..</a>)</li>
                <li>2D Animator</li>
                <li>UI / UX Designer</li>
            </ul>
        </div>

        <div class="col-md-4 float-left">
        <img class = "img-fluid" src = "{{url('')}}/images/Career/work-with-us-illustration.png" alt="">

        </div>
    </div>
</div>

@endsection