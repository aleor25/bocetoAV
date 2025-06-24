@extends('layouts.app')
@section('title', 'Visor Molecular 3D')
@section('content')

<!-- Hero principal -->
<div style="background-color: var(--info);" class="w-full">
    <div class="flex flex-col items-center py-[70px] px-[70px] text-center w-full">
        <!-- Hero Top: imagen + contenido -->
        <div class="flex flex-row items-center justify-center gap-5 mb-5 flex-wrap md:flex-nowrap">
            <img src="{{ asset('images/desk.png') }}" alt="Monitor" class="w-300 max-w-[400px] animate-pulse" />
            <div class="text-center max-w-[500px] flex flex-col items-center">
                <div class="flex flex-col items-center gap-2 mb-4">
                    <button style="background-color: #fff; color: var(--primary); border-color: var(--primary); position: relative; left: -20px;" class="border-4 rounded-lg w-[175px] text-[1.75rem] font-bold py-2 px-5 mb-2 transition-transform duration-300 hover:scale-110">Explora</button>
                    <button style="background-color: var(--secondary); color: #fff; border-color: var(--primary); position: relative; right: -90px;" class="border-4 rounded-lg w-[175px] text-[1.75rem] font-bold py-2 px-5 mb-2 transition-transform duration-300 hover:scale-110">Aprende</button>
                    <button style="background-color: var(--accent); color: var(--primary); border-color: var(--primary); position: relative; left: -5px;" class="border-4 rounded-lg w-[175px] text-[1.75rem] font-bold py-2 px-5 mb-2 transition-transform duration-300 hover:scale-110">Crea</button>
                </div>
                <hr class="border-0 h-[10px] my-5 w-full" style="background-color: var(--secondary);" />
                <p class="mt-2">¡Únete a la nueva era educativa y lleva la ciencia al siguiente nivel!</p>
            </div>
        </div>
        <!-- Hero Bottom: botón centrado -->
        <div class="flex justify-center w-full mt-8">
            <button style="background-color: var(--primary); color: #fff;" class="text-[1.2rem] py-3 px-6 rounded-lg cursor-pointer flex items-center justify-center gap-2 border-none transition-all duration-400 shadow-md min-w-[180px] hover:bg-[var(--secondary)] hover:-translate-y-1 hover:shadow-lg active:translate-y-0.5"
                onclick="window.location.href='/renderonline'">
                <i class="fas fa-search w-5 h-5 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6"></i>
                Descubre tu molécula
            </button>
        </div>
    </div>
</div>

<!-- Sección tabla periódica -->
<div style="background-color: #fff;" class="w-full">
    <div class="flex flex-row-reverse items-center justify-between text-right" style="color: var(--primary); padding-left: 70px; padding-right: 70px; padding-top: 3rem; padding-bottom: 3rem;">
        <div class="max-w-[500px]">
            <h2 class="text-2xl mb-2" style="font-family: 'Lilita One', cursive;">Explora la tabla periódica</h2>
            <p class="mb-4 text-right">Descubre todos los elementos químicos, sus propiedades y características de manera interactiva. Una herramienta esencial para estudiantes y amantes de la química.</p>
            <div class="mt-5">
                <a href="{{ route('periodic-table') }}"
                    class="inline-flex items-center justify-center text-[1.2rem]
          py-3 px-6 rounded-lg cursor-pointer gap-2
          transition-all duration-400 shadow-md
          hover:bg-[var(--secondary)] hover:-translate-y-1 hover:shadow-lg active:translate-y-0.5"
                    style="background-color: var(--primary); color: #fff;">
                    <i class="fas fa-atom w-5 h-5 transition-transform duration-300
               group-hover:scale-110 group-hover:rotate-6"></i>
                    Ver Tabla Periódica
                </a>

            </div>
        </div>
        <img src="{{ asset('images/tbpicon.png') }}" alt="Icono tabla periódica" class="w-[300px] h-auto m-2 transition-transform duration-300 hover:scale-110" />
    </div>
</div>

<!-- Sección misión -->
<div style="background-color: var(--primary);" class="w-full">
    <div class="flex flex-row items-center justify-between text-white px-[70px] py-12 gap-5 flex-wrap md:flex-nowrap w-full">
        <div class="max-w-[500px]">
            <h2 class="text-2xl mb-2" style="font-family: 'Lilita One', cursive;">Misión</h2>
            <p class="text-left">Proporcionar a estudiantes y docentes una herramienta educativa innovadora que facilite la comprensión de conceptos abstractos, fomente el pensamiento crítico y creativo, y promueva un aprendizaje activo y significativo.</p>
        </div>
        <img src="{{ asset('images/quimico.png') }}" alt="Químico" class="w-[300px] h-auto m-2 transition-transform duration-300 hover:scale-110" />
    </div>
</div>

<!-- Sección visión -->
<div style="background-color: var(--secondary);" class="w-full">
    <div class="flex flex-row-reverse items-center justify-between" style="color: var(--primary); padding-left: 70px; padding-right: 70px; padding-top: 3rem; padding-bottom: 3rem;">
        <div class="max-w-[500px]">
            <h2 class="text-2xl mb-2 text-right" style="font-family: 'Lilita One', cursive;">Visión</h2>
            <p class="text-right">Ser la solución educativa en química molecular para telesecundarias de la región, extendiendo el acceso a laboratorios virtuales y revolucionando la enseñanza con tecnología para impulsar la educación científica y el desarrollo en contextos diversos.</p>
        </div>
        <img src="{{ asset('images/vision.png') }}" alt="Visión" class="w-[300px] h-auto m-2 transition-transform duration-300 hover:scale-110" />
    </div>
</div>

<!-- Sección valores -->
<div class="w-full">
    <div class="text-center px-[70px] py-6 w-full">
        <hr class="border-0 h-[9px] my-6 w-full" style="background-color: var(--accent);" />
        <h2 class="text-2xl text-center py-4" style="font-family: 'Lilita One', cursive;">Valores</h2>
        <hr class="border-0 h-[9px] my-6 w-full" style="background-color: var(--accent);" />

        <div class="flex flex-row justify-center mt-6 gap-6 flex-wrap md:flex-nowrap">
            <!-- Valor 1 -->
            <div class="text-center max-w-[200px] flex flex-col items-center">
                <div class="rounded-full w-[150px] h-[150px] flex items-center justify-center shadow-lg mb-4" style="background-color: var(--primary);">
                    <img src="{{ asset('images/generacion.png') }}" alt="Innovación" class="w-[80px] h-[80px]" />
                </div>
                <div class="font-bold text-lg leading-none flex flex-col items-center">
                    <span>Innovación</span>
                    <hr class="border-4 rounded w-full h-[5px] my-2 mx-auto" style="background-color: var(--primary);" />
                    <span>Sostenibilidad</span>
                </div>
            </div>

            <!-- Valor 2 -->
            <div class="text-center max-w-[200px] flex flex-col items-center">
                <div class="rounded-full w-[150px] h-[150px] flex items-center justify-center shadow-lg mb-4" style="background-color: var(--info); border: 4px solid var(--primary);">
                    <img src="{{ asset('images/gafas-de-proteccion.png') }}" alt="Seguridad" class="w-[80px] h-[80px] filter brightness-50 contrast-100" />
                </div>
                <div class="font-bold text-lg leading-none flex flex-col items-center">
                    <span>Seguridad</span>
                    <hr class="border-4 rounded w-full h-[5px] my-2 mx-auto" style="background-color: var(--primary);" />
                    <span>Educación</span>
                </div>
            </div>

            <!-- Valor 3 -->
            <div class="text-center max-w-[200px] flex flex-col items-center">
                <div class="rounded-full w-[150px] h-[150px] flex items-center justify-center shadow-lg mb-4" style="background-color: var(--primary);">
                    <img src="{{ asset('images/grupo.png') }}" alt="Colaboración" class="w-[80px] h-[80px]" />
                </div>
                <div class="font-bold text-lg leading-none flex flex-col items-center">
                    <span>Colaboración</span>
                    <hr class="border-4 rounded w-full h-[5px] my-2 mx-auto" style="background-color: var(--primary);" />
                    <span>Accesibilidad</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection