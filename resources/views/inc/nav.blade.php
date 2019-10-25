<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="col-lg-1 col-xl-2"></div>
    <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 logo ">

        <a href="{{url('')}}" class=" navbar-brand">
            <img class = "img-fluid" src = "{{url('')}}/images/Logo-EsaGaming.png">
        </a>
    </div>

    <!-- <button class="navbar-toggler ml-auto my-navbar-button" type="button" data-toggle="collapse"  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->
    <span class="navbar-toggler-icon d-lg-none" onclick="openNav()"></span>



    <div class="ml-auto bg-dark-mobile" id="navbarNav">

        <!-- <span class=" ml-auto my-navbar-button closebtn d-md-none"  data-toggle="collapse"  data-target="#navbarNav" >&times;</span> -->
        <a href="javascript:void(0)" class="closebtn d-lg-none ml-auto" onclick="closeNav()">&times;</a>
        <ul class="navbar-nav">
            <li class="nav-item {{ (request()->is('Games')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('mobile-games')}}">Mobile Games</a>
            </li>

            <li class="nav-item {{ (request()->is('Poker-Network')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('poker-network')}}">Poker Network</a>
            </li>
            <li class="nav-item {{ (request()->is('Game-Aggregator-System')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('gas')}}">Game Aggregator <span>System</span></a>
            </li>

            <li class="nav-item {{ (request()->is('Work-with-us')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('career')}}">Work with us</a>
            </li>

            <li class="nav-item {{ (request()->is('About-us')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('about-us')}}">About us</a>
            </li>

            <li class="nav-item {{ (request()->is('Contact-Us')) ? 'active' : '' }}">
                <a class="nav-link" href="{{route('contact')}}">Contact us</a>
            </li>
        </ul>
    </div>
</nav>
