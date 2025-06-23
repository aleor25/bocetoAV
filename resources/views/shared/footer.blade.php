<footer class="w-full flex flex-col text-white mt-12" style="background-color: var(--primary);">
    <div class="w-full px-[70px] py-6 flex justify-between items-center flex-col md:flex-row" style="background-color: var(--primary);">
        <!-- Imagen a la izquierda -->
        <div class="flex items-center justify-center md:justify-start w-full md:w-auto mb-4 md:mb-0">
            <img src="{{ asset('av.png') }}" alt="Logo" class="w-[220px] md:w-[260px] h-auto object-contain">
        </div>

        <!-- Texto a la derecha -->
        <div class="w-full md:w-auto flex flex-col justify-center md:justify-end items-center md:items-end text-center md:text-right gap-1">
            <p class="text-sm italic text-white">
                Laboratorio de química virtual para uso educativo.
            </p>
            <div class="text-white text-xs md:text-sm font-bold italic">
                &copy; 2025 - Desarrollado por estudiantes de la UTCV
            </div>
        </div>
    </div>
</footer>