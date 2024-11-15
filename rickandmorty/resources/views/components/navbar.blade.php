<nav style="background-color: #38589D;">
    <div class="navbar navbar-expand-lg container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/rick.jpg') }}" alt="Logo" class="rounded-circle img-logo">
        </a>
        <!-- Menu responsivo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto menu-links">
                <a class="navbar-brand menu-item" href="/">Home</a>
                
                <!-- Verifica se o usuário está autenticado -->
                @auth
                    <!-- Exibe o nome do usuário autenticado -->
                    
                    <a class="navbar-brand menu-item" href="/favorites">Personagens</a>
                    <!-- Mostrar Logout se o usuário estiver autenticado -->
                    <a class="navbar-brand menu-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
                    <a class="navbar-brand menu-item" href="/information">Sobre</a>
                    <span class="navbar-brand menu-item text-white">
                        {{ Auth::user()->name }}
                    </span>
    
                @else
                    <!-- Mostrar Login se o usuário não estiver autenticado -->
                    <a class="navbar-brand menu-item" href="/information">Sobre</a>
                    <a class="navbar-brand menu-item" href="{{ route('login') }}">Login</a>
                    <a class="navbar-brand menu-item" href="{{ route('register') }}">Registre-se</a>
                    
                @endauth
                
            </div>
        </div>
    </div>
</nav>
