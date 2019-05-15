<nav class="navbar navbar-expand-xl navbar-dark">
    <div class="col-xl-2"></div>
    <div class="col-6 col-sm-5 col-md-4 col-lg-3 col-xl-2 logo ">
        <a href="{{url('')}}" class=" navbar-brand">
            <img class = "img-fluid" src = "{{url('')}}/images/Logo-EsaGaming.png">
        </a>
    </div>

    <button class="navbar-toggler ml-auto my-navbar-button" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-dark-mobile" id="navbarNav">
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