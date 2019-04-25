@extends('layout.main')

@section('banner-image', 'contact-us-background-image')
@section('banner-text', 'Contact ESA Gaming now')

@section('content')

    <div class = "row mt-3">
        <div class="col-md-6 col-lg-6 offset-3  text-under-banner">
            <p>Are you interested to find out how we can enhance your offering? Don't be a stranger - we'd like to hear from you and see what we can do to keep your players engaged and happy</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6 col-lg-6 offset-3 mb-5 background-dark">
            <div class="form ">
                <form class = "contact-form" action="">

                    <div class="col">
                        <label for="name">Your Name</label>
                        <input type="text" class = "form-control">
                    </div>

                    <div class="col form-row mt-4">
                        <div class="col">
                            <label for="company">Company Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="col mt-4">
                        <label for="subject">Subject</label>
                        <input type="text" class = "form-control">
                    </div>

                    <div class="col mt-4">
                        <label for="message">Message</label>
                        <textarea rows="9" class = "form-control"> </textarea>
                    </div>
                    <div class="col-md-3 col-lg-3 ml-2 mt-5 text-center find-out" style = "border:2px solid white;">
                            <a href = "{{route('mobile-games')}}" >SUBMIT</a>
                        </div>
                    <!-- <div class="col-md-2 col-lg-2 float-left text-center mt-5 contact-submit" style = "border:2px solid white;">
                        <a href = "{{route('mobile-games')}}" >SUBMIT</a>
                    </div> -->

                </form>

            </div>

        </div>
    </div>
@endsection