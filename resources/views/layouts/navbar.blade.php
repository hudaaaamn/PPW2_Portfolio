<header>
<nav class="navbar navbar-expand-lg bg-white border-1 mt-2 sticky-top" style="top:10px !important;">
	<div class="container-fluid">
	<a href="#" class="logo"><span>PORTOFOLIO</span> </a>
      <ul class="navlist">
		<br>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#about" class="about">About Me</a></li>
        <li><a href="#service" class="services">Services</a></li>
        <li><a href="#portfolio" class="portfolio">Portfolio</a></li>
        <li><a href="#contact" class="contact">Contact Me</a></li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else    
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                @endguest
            </ul>
		</div>
</nav>
</header>