@extends('layout.main')

@section('banner-image', 'contact-us-background-image')
@section('banner-text', 'Contact ESA Gaming now')


@section('content')

    <div class="row mt-4">
        <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2 roboto-light box-shadow p-5 contact-text">
            <p>Are you interested to find out how we can enhance your offering? Don't be a stranger - we'd like to hear from
                you and see what we can do to keep your players engaged and happy!</p>
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>

<div class="row mt-4">
    <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2 mb-5 background-dark box-shadow">
        <div class="form ">
            <form class="contact-form" action="{{ route ('contact') }}" method="POST">
                @csrf

                <div class="col">
                    <label for="name">Your Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ Request::get('name') }}">
                    @if ( $validator && $validator->errors()->first('name') )
                    <div class="alert alert-danger mt-2">
                        {{ $validator->errors()->first('name') }}
                    </div>
                    @endif
                </div>

                <div class="col form-row mt-4">
                    <div class="col">
                        <label for="company">Company Name</label>
                        <input type="text" name="company_name" class="form-control"
                            value="{{ Request::get('company_name') }}">
                    </div>

                    <div class="col">
                        <label for="email">Email *</label>
                        <input type="email" name="email" class="form-control" value="{{ Request::get('email') }}">
                        @if ( $validator && $validator->errors()->first('email') )
                        <div class="alert alert-danger mt-2">
                            {{ $validator->errors()->first('email') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="col mt-4">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control" value="{{ Request::get('subject') }}">
                </div>

                <div class="col mt-4">
                    <label for="message">Message *</label>
                    <textarea rows="9" name="message" class="form-control"
                        required> {{ Request::get('message') }} </textarea>
                    @if ( $validator && $validator->errors()->first('message') )
                    <div class="alert alert-danger mt-2">
                        {{ $validator->errors()->first('message') }}
                    </div>
                    @endif
                </div>
                <div class="col-md-3 col-lg-3 ml-2 mt-5 text-center find-out">
                    <!-- <a href = "" >SUBMIT</a> -->
                    <button type="submit" class="btn submit-btn contact-button ">SUBMIT</button>
                </div>
                <!-- <div class="col-md-2 col-lg-2 float-left text-center mt-5 contact-submit" style = "border:2px solid white;">
                        <a href = "{{route('mobile-games')}}" >SUBMIT</a>
                    </div> -->

            </form>

        </div>

    </div>
</div>
@endsection