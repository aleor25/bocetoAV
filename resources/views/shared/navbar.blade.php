<nav class="bg-[#4e7989cb] backdrop-blur-lg top-0 left-0 w-full z-[1000] px-[70px] py-4 h-auto flex justify-between items-center transition-transform duration-300" id="navbar">
    <!-- Logo -->
    <div class="flex items-center w-[220px] md:w-[200px] h-auto">
        <a href="/" class="underline-animate w-full h-full">
            <img src="{{ asset('av.png') }}" alt="Logo" class="w-full h-full object-contain">
        </a>
    </div>

    <!-- Menú principal (oculto en móvil) -->
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

    <!-- Botón Iniciar Sesión al final del navbar -->
    @guest
    <div class="ml-auto">
        <a href="{{ route('login') }}"
            class="text-white text- xl no-underline underline-animate transition-all duration-200">
            Iniciar sesión
        </a>
    </div>
    @endguest

    <!-- Hamburguesa (solo visible en móvil) -->
    <!-- <div class="md:hidden flex flex-col cursor-pointer ml-4 z-[101]" onclick="toggleMenu(this)" id="hamburger">
        <div class="w-[30px] h-[3px] bg-white my-[5px] transition-all duration-300"></div>
        <div class="w-[30px] h-[3px] bg-white my-[5px] transition-all duration-300"></div>
        <div class="w-[30px] h-[3px] bg-white my-[5px] transition-all duration-300"></div>
    </div> -->
</nav>


<script>
    function toggleMenu(btn) {
        btn.classList.toggle("active");
        const menu = document.getElementById("menu");
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
        menu.classList.toggle("flex-col");
        menu.classList.toggle("bg-[#4e7989f2]");
        menu.classList.toggle("absolute");
        menu.classList.toggle("top-[70px]");
        menu.classList.toggle("right-0");
        menu.classList.toggle("w-full");
        menu.classList.toggle("text-center");
        menu.classList.toggle("py-4");
    }
</script>