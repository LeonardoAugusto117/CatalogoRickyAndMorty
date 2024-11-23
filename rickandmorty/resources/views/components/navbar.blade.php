<nav style="background-color: #ffffff;">
    <div class="navbar navbar-expand-lg container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="rounded-circle img-logo" style="height: 60px; width: 60px;">
        </a>

        <!-- Menu responsivo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="ms-auto menu-links">
                <!-- Home Link -->
                <a class="btn btn-sm btn-outline-secondary navbar-brand menu-item" href="/">Home</a>

                <!-- Verifica se o usuário está autenticado -->
                @auth
                    <!-- Personagens Link -->
                    <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="dropdownDefault" data-bs-toggle="dropdown" aria-expanded="false">
                    <a class="btn btn-sm btn-outline-secondary navbar-brand menu-item" href="/favorites">Personagens</a>
                    </button>

                    <!-- Dropdown para o usuário -->
                    
                        <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="dropdownDefault" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 bg-white border border-gray-200 rounded-lg shadow-md mt-1" aria-labelledby="dropdownDefault">
                            <li>
                                <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="dropdownDefault" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="block px-4 py-2 text-sm" href="/information">Sobre</a>
                                </button>
                            </li>
                            <li> <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="dropdownDefault" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="block px-4 py-2 text-sm" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </button>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    

                @else
                    <!-- Links para não autenticados -->
                    <a class="btn btn-sm btn-outline-secondary navbar-brand menu-item" href="/information">Sobre</a>
                    <a class="btn btn-sm btn-outline-secondary navbar-brand menu-item" href="/mensagers">Contato</a>
                    <a class="btn btn-sm btn-outline-secondary navbar-brand menu-item" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-sm btn-outline-secondary navbar-brand menu-item" href="{{ route('register') }}">Registre-se</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
