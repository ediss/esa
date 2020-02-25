@extends('layout.main')

@section('banner-image', 'work-with-us-background-image')
@section('banner-text', 'Job Description')

@section('content')
<div class="row">
    <div class="col-12 text-center">
            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
    </div>
        
    <div class="col-md-8 offset-md-2 roboto-light p-4 mb-4 box-shadow">
        <div class="col-md-12">
            <h1 class="text-center font-weight-bold mb-5">Platform Product Owner</h1>
            <p>Have you got previous Product experience in an online industry? If so this could be the next step for you
                in
                your career! <br />Perhaps you are an experienced Project Manager looking to take the next step up?
            </p>

            <nav class="nav nav-pills nav-justified mt-5">
                <a class="nav-item nav-link active" data-toggle="pill" href="#about">About & Responsibilities</a>
                <a class="nav-item nav-link" data-toggle="pill" href="#requirements">Requirements</a>
                <a class="nav-item nav-link" data-toggle="pill" href="#qualifications">Qualifications and Experience</a>
            </nav>

            <div class="tab-content">
                <div id="about" class="container tab-pane active"><br>
                    <div class="col-md-12 mt-5 text-center">
                        <h3 class="font-weight-bold mb-5">About this opportunity</h3>
                        <p>This is a new and exciting opportunity for a talented Product Owner to join an established
                            boutique
                            platform
                            and software provider in the gaming / betting sector, driven by experienced industry
                            experts.
                        </p>

                        <p>
                            You will assist the business in the continued development of a user management and gaming
                            platform.
                            You
                            will initially manage their industry leading platform which services the gaming industry but
                            you
                            will
                            quickly
                            get involved in product development across the business.
                        </p>

                        <p>
                            You will be working from our Belgrade office and co-ordinating between teams and remote
                            staff in 3
                            different countries.
                        </p>


                    </div>

                    <div class="col-md-12 mt-5 my-list work-with-us-list">
                        <h3 class="font-weight-bold mb-5 ">Responsibilities include:</h3>
                        <ul>
                            <li> Develop a detailed understanding of our customers, their needs and how they use our
                                products.
                            </li>
                            <li> The management of technical products (APIs, Integrations, certifications etc.) </li>
                            <li> Assisting with platform integrations.</li>
                            <li> Capturing and documenting user requirements.</li>
                            <li> Owning technical documentation.</li>
                            <li> Constantly driving product development and innovation ensuring long term service
                                quality.</li>
                            <li> Translating business needs into backlog items.</li>
                            <li> Managing the product backlog and development roadmap.</li>
                            <li> Achieving optimal customer satisfaction through interaction with the system across all
                                channels.</li>
                            <li> Establishing product/feature acceptance criteria and overseeing user acceptance
                                testing.</li>
                            <li> Managing the progression of development through leadership and management of each
                                project.</li>
                            <li> Working closely with the senior management to ensure scheduling, prioritization and
                                resource
                                allocation is in-line with business needs.</li>
                            <li> Research and analyse existing data and competitor products in cooperation with various
                                teams to
                                validate and evaluate ideas.</li>
                            <li> Delivering projects on time ensuring they met the agreed completion and acceptance
                                criteria.
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="requirements" class="container tab-pane fade"><br>
                    <div class="col-md-12 mt-3 my-list work-with-us-list mt-5">
                        <h3 class="font-weight-bold mb-5">Requirements:</h3>
                        <ul class="p-0">
                            <li>Significant experience in a product management role.</li>
                            <li>Self-motivated with strong analytical skills and excellent attention to detail.</li>
                            <li>Track record of successful projects within the role of Product Manager and/or Product
                                Owner
                            </li>
                            <li>Comfortable working across multiple projects with challenging deadlines in a dynamic
                                environment</li>
                            <li>Experienced in relationship management with third party suppliers at all levels</li>
                            <li>Team player with an agile mindset and a positive attitude</li>
                            <li>Strong skills in testing software for user acceptance purposes.</li>
                        </ul>
                    </div>
                </div>

                <div id="qualifications" class="container tab-pane fade"><br>

                    <div class="col-md-12  my-lisst work-with-us-list mt-5 ">

                        <h3 class="font-weight-bold mb-5">Qualifications & Experience</h3>
                        <ul class="">
                            <li>An understanding of project management methodologies.</li>
                            <li>An understanding of SaaS business.</li>
                            <li>Qualifications / Understanding of Scrum/Agile.</li>
                            <li>Experience working with international environment.</li>
                            <li>Experience in the sports betting or gaming industry would be beneficial.</li>
                        </ul>



                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 text-center mt-5">
            <div class="apply-btn col-4 offset-4">
                <button type="button" class="btn job-button btn-lg" data-toggle="modal"
                    data-target="#myModal">Apply</button>
            </div>

        </div>


    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Owner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route ('job.description') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" placeholder="First and Last name *" class="form-control"
                            value="{{ Request::get('name') }}">
                        @if ( $validator && $validator->errors()->first('name') )
                        <div class="alert alert-danger mt-2">
                            {{ $validator->errors()->first('name') }}
                    </div>
                    @endif
            </div>

            <div class="form-group">

                <input type="email" name="email" placeholder="example@gmail.com *" class="form-control"
                    value="{{ Request::get('email') }}">
                @if ( $validator && $validator->errors()->first('email') )
                <div class="alert alert-danger mt-2">
                    {{ $validator->errors()->first('email') }}
            </div>
            @endif
        </div>

        <div class="form-group">

            <textarea class="form-control" name="cover" placeholder="Covver Letter"> </textarea>
            @if ( $validator && $validator->errors()->first('cover') )
                    <div class="alert alert-danger mt-2">
                        {{ $validator->errors()->first('cover') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label for="">Resume *</label> <br/>
        <input type="file" name="resume"></div>
        
        @if ( $validator && $validator->errors()->first('resume') )
                <div class="alert alert-danger mt-2">
                    {{ $validator->errors()->first('resume') }}
    </div>
    @endif
</div>
<div class=" text-center border-top justify-content-center">

    <button type="submit" class="btn btn-lg job-button">Apply</button>
</div>
</form>

</div>
</div>
</div>
@endsection