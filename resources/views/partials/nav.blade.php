<nav>
    @guest
    <p><a href="{{ route('login') }}">Iniciar sesion</a> | <a href="{{ route('login') }}">Registrarse</a></p>
    @else
    <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                >Cerrar sesion</a>
    @endguest



    <ul>
        <li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActive('about') }}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
        <li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">Portafolio</a></li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
