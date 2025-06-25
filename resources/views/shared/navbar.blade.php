<nav class="bg-[#4e7989cb] backdrop-blur-lg top-0 left-0 w-full z-[1000] px-4 md:px-[70px] py-4 h-auto flex justify-between items-center transition-transform duration-300" id="navbar">
    <!-- Logo -->
    <div class="flex items-center w-[180px] md:w-[200px] h-auto">
        <a href="/" class="underline-animate w-full h-full">
            <img src="{{ asset('av.png') }}" alt="Logo" class="w-full h-full object-contain">
        </a>
    </div>

    <!-- Menú principal (desktop) -->
    <ul class="hidden md:flex list-none items-center gap-[2vw] transition-all duration-300" id="menu">
        @auth
        <li><a href="{{ route('dashboard') }}" class="text-white font-bold text-[1.1em] relative hover:underline-link">Inicio</a></li>
        <li><a href="#" class="text-white font-bold text-[1.1em] relative hover:underline-link"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a></li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-white font-bold text-[1.1em] relative hover:underline-link flex items-center">
                <i class="fas fa-sign-out-alt logout-icon"></i>
                <span class="logout-text hidden md:inline ml-1">Cerrar sesión</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
        </li>
        @endauth
    </ul>

    <!-- Botón Iniciar Sesión (desktop) -->
    @guest
    <div class="ml-auto hidden md:block">
        <a href="{{ route('login') }}"
            class="text-white text-xl no-underline underline-animate transition-all duration-200">
            Iniciar sesión
        </a>
    </div>
    @endguest

    <!-- Hamburguesa (móvil) -->
    <div class="md:hidden flex flex-col cursor-pointer ml-4 z-[101]" onclick="toggleMenu(this)" id="hamburger">
        <div class="w-[30px] h-[3px] bg-white my-[5px] transition-all duration-300"></div>
        <div class="w-[30px] h-[3px] bg-white my-[5px] transition-all duration-300"></div>
        <div class="w-[30px] h-[3px] bg-white my-[5px] transition-all duration-300"></div>
    </div>

    <!-- Menú móvil deslizante hacia abajo -->
    <ul class="md:hidden hidden flex-col bg-[#4e7989f2] absolute top-[70px] right-0 w-full text-center py-4 z-[1001] transition-all duration-300" id="mobile-menu">
        @auth
        <li><a href="{{ route('dashboard') }}" class="text-white font-bold text-lg py-2 block hover:underline-link">Inicio</a></li>
        <li><a href="#" class="text-white font-bold text-lg py-2 block hover:underline-link"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a></li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();"
                class="text-white font-bold text-lg py-2 block hover:underline-link flex items-center justify-center">
                <i class="fas fa-sign-out-alt logout-icon"></i>
                <span class="logout-text ml-1">Cerrar sesión</span>
            </a>
            <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
        </li>
        @endauth
        @guest
        <li>
            <a href="{{ route('login') }}"
                class="text-white font-bold text-lg py-2 block hover:underline-link">
                Iniciar sesión
            </a>
        </li>
        @endguest
    </ul>
</nav>