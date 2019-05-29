@extends('layout.main')

@section('banner-image', 'work-with-us-background-image')
@section('banner-text', 'Work with us')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2 roboto-light p-4 mb-4 box-shadow">
        <div class="col-md-12">
            <p>We put a lot of effort into building a company that promotes both profesionalism and joy in every day's work. We want to build a successful comapany by building great things. This means that we will always keep out startup culture alive without <br/> any compromises to the ambitious projects we undertake.</p>
        </div>
        <div class="row">
            <div class="col-md-6 float-left my-list work-with-us-list">
                <h4>At the moment we have these positions opened</h4>

                <ul>
                    <li>2D illustrator </li>
                    <li>2D Animator</li>
                    <li>UI / UX Designer</li>
                </ul>
            </div>

            <div class="col-sm-8 col-md-6 col-xl-4 offset-sm-2 offset-md-0 mt-4 mt-md-0 ">
                <img class = "img-fluid" src = "{{url('')}}/images/Career/work-with-us-illustration.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection