@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="flex flex-col items-center justify-center min-h-[15vh] py-[5vh] px-2 bg-white max-w-[420px] w-full mx-auto">
    <h2 class="relative text-2xl md:text-3xl font-bold text-[#003366] mb-5 text-center login-title-tailwind">
        ¡Bienvenido(a)!
    </h2>
    <div class="bg-[#f9f9f9] p-8 rounded-[15px] max-w-[400px] w-full shadow-lg border-2 border-[#D3D3D3] text-center">
        <div class="flex justify-center items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-[60px] h-[60px] text-[#0A4D5F]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zM4 20c0-3.313 3.134-6 7-6h2c3.866 0 7 2.687 7 6v2H4v-2z" />
            </svg>
        </div>

        <form method="POST" action="{{ route('login') }}" class="w-full">
            @csrf
            <div class="mb-3 text-left">
                <label for="email" class="block font-bold mb-1 text-sm text-[#333]">Correo electrónico / Usuario</label>
                <input id="email" type="email" class="w-full px-3 py-2 text-[15px] rounded-md border border-[#ccc] bg-[#e8e8fc] focus:outline-none focus:ring-2 focus:ring-[#1B475D] @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <div class="text-red-600 text-xs mt-1">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="mb-3 text-left">
                <label for="password" class="block font-bold mb-1 text-sm text-[#333]">Contraseña</label>
                <div class="relative w-full">
                    <input id="password" type="password" class="w-full px-3 py-2 text-[15px] rounded-md border border-[#ccc] bg-[#e8e8fc] focus:outline-none focus:ring-2 focus:ring-[#1B475D] @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                    <button type="button" class="absolute right-2 top-1/2 -translate-y-1/2 bg-transparent border-none cursor-pointer p-0 w-6 h-6 flex items-center justify-center" onclick="togglePassword()">
                        <i class="fas fa-eye text-[#1B475D] text-base"></i>
                    </button>
                </div>
                @error('password')
                <div class="text-red-600 text-xs mt-1">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>

            <div class="flex flex-wrap justify-between gap-2 mb-3">
                <button type="submit" class="w-full bg-[#0A4D5F] hover:bg-[#083A45] text-white py-3 px-5 text-[15px] font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 text-center">
                    Iniciar sesión
                </button>
            </div>

            <p class="text-[13px] text-[#333] text-center mt-2">
                ¿No tienes cuenta? <br>
                <span class="font-bold text-[#003366]">Pide al administrador te registre</span>
            </p>
            <div class="w-full h-[3px] bg-[#f4c542] my-4"></div>
        </form>
    </div>
</div>

@endsection
