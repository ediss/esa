@extends('layout.main')

@section('links')
<link rel="stylesheet" href="{{url('')}}/css/contact.css">

@section('content')

<div class = "row main p-0">

	<div class="col-md-12 mt-5 text-center">

		<h1>Contact Esa gaming now</h1>

		<p>
			Do you wish to expand your offer? ESA Gaming gives you all the necessary tools to achieve success. Wait no more! Contact us right away and choose the ideal solution for your business!
		</p>

	</div><!-- /text -->


    <div class="col-md-12 pt-5 contact-form mb-5 ">
        <div class="col-md-8 offset-2 contact-form2">
            <form action = "#" class="mb-5"method = "POST">

                <div class="form-group">
                    Your name:<br>
                    <input type="text" class = "form-control" name="yourname"><br>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        Company name:<br>
                        <input type="text" class = "form-control" name="companyname">
                    </div>

                    <div class="col-md-6">
                        Email:<br>
                        <input type="text" class = "form-control" name="email">
                    </div>
                </div>

                <div class="form-group">
                    Company name:<br>
                    <input type="text" class = "form-control" name="companyname">
                </div>

                <div class="form-group">
                    Email:<br>
                    <input type="text" class = "form-control" name="email"><br>
                </div>

                <div class="form-group">
                    Subject:<br>
                    <input type="text" class = "form-control" name="subject"><br>
                </div>

                <div class="form-group">
                    Message:<br>
                    <textarea  name="message"></textarea><br>
                    <input type="submit" value="Submit" class="btn-contact">
                </div>


            </form>

            <div class="col-md-12 position-absolute back-image-top">
        </div>

        <div class="col-md-12  position-absolute back-image-bottom mt-5" style = "border:2px solid green;">
            <!-- <img src="{{url('')}}/images/Contact/contact-form-bg-bottom.png" style = "border:2px solid blue" class = "img-fluid" alt=""> -->
        </div>
        </div>


    </div>

</div><!--/main-->
@endsection