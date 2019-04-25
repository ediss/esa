    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="collapse navbar-collapse  text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ (request()->is('Games')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('mobile-games')}}">Games</a>
                </li>

                <li class="nav-item {{ (request()->is('Poker-Network')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('poker-network')}}">Poker Network</a>
                </li>
                <li class="nav-item {{ (request()->is('Game-Aggregator-System')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('gas')}}">Game Aggregator System</a>
                </li>

                <li class="nav-item {{ (request()->is('Work-with-us')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('career')}}">Work with us</a>
                </li>

                <li class="nav-item {{ (request()->is('About-us')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('about-us')}}">About us</a>
                </li>

                <li class="nav-item {{ (request()->is('Contact-Us')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>