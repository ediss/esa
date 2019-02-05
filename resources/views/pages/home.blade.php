@extends('layout.main')

@section('main_banner')
<img src = "{{url('')}}/images/header-intro.png" class="img-fluid">
@endsection

@section('content')
<div class="row pt-4">
    <div class="col-xs-12 col-sm-12 col-md-8 offset-md-2 p-5 text-center text_under_banner" >
        <p> ESA Gaming gives you all the tools you need to acquire new best of bread gaming content with <br/> minimal effort; our platform saves you time and resources. Offer your players new desktop and<br/> mobile content with just one click! </p>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 p-0 text-center products">
        <div class="jumbotron">
            <h2 style = "color:#f4bc52;">PRODUCTS</h2>

            <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8 offset-md-2 offset-lg-2 offset-xl-2 mt-5" >
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xl-4 ">
                        <div class="row">
                            <div class="col-12 same-height ">
                                <h3>Game Aggregator System</h3>
                                <h3>(GAS)</h3>
                            </div>
                            
                            <div class="col-12">
                                <div class="img img-fluid mt-5 ">
                                    <img src="{{url('')}}/images/GAS/GAS-illustration.png" alt=""> 
                                </div>

                                <div class="span">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div class="col-xs-4 col-md-12 col-lg-8 offset-xs-4 offset-xl-4 mt-5 mb-5 p-2 mx-auto button">
                                    <p>FIND OUT MORE >> </p>    
                                </div>
                            </div>
                        </div>
                                    
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="row">
                            <div class="col-12 same-height">
                                <h3>Poker Network</h3> 
                            </div>
                            
                            <div class="col-12">
                                <div class="img img-fluid mt-5">
                                    <img src="images/poker-illustration.png" alt=""> 
                                </div>

                                <div class="span">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div class="col-xs-4 col-md-12 col-lg-8 offset-xs-4 offset-xl-4 mt-5 p-2 mx-auto button">
                                    <p>FIND OUT MORE >> </p>    
                                </div>
                            </div>
                        </div>                   
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="row">
                            <div class="col-12 same-height">
                                <h3>Mobile Games</h3>
                            </div>
                            
                            <div class="col-12">
                                <div class="img img-fluid mt-5">
                                    <img src="{{url('')}}/images/poker-illustration.png" alt=""> 
                                </div>

                                <div class="span">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>

                                <div class="col-xs-4 col-md-12 col-lg-8 offset-xs-4 offset-xl-4 mt-5 mb-5 p-2 mx-auto button">
                                    <p>FIND OUT MORE >> </p>    
                                </div>
                            </div>
                        </div>
                                    
                    </div>

                            
                </div>            
            </div>
        </div>
  
    </div>
</div>



<div class="row">
    <div class="col-lg-12 p-0">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-12 col-lg-12 col-xl-12  p-5 text-center services">
                    <h2 style = "color:#f4bc52;">SERVICES</h2>
                    <p class = "mt-5"> ESA Gaming has developer its own Game Aggregator System "GAS", in an attempt to try and solve a common problem for <br/> many operaters in the gaming industry; launching new content and diffusing through new distribution chanels<br/> (smartphones) in a short period of time. The platgorm is approved and regulated in the Italian marker and offers a bonus and <br/> back office system that allows you to manage efficiently both your customers and promotions. </p>
                    <br/><p>Just one back office for so many providers.</p>
                </div>
            </div>
                        
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 ">
                <div class="row">
                    @foreach($partners as $partner)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-2 p-4">
                        <img src = "{{url($partner->img_url)}}" class = "img-fluid">
                    </div>
                    @endforeach
                    
                                        
                     
                </div>
            </div>
        
    </div>
</div>


              

           
@endsection