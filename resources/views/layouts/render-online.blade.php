@extends('layouts.app')
@section('title', 'Visor Molecular 3D')
@section('content')
<!-- Contenedor principal de la página -->
<div class="py-[70px] px-[70px] min-h-screen">
    <div class="flex flex-col lg:flex-row gap-8 w-full h-full">
        <!-- Contenedor del visor 3D -->
        <div class="w-full h-[600px] lg:h-[80vh] lg:w-1/2 flex-shrink-0 flex items-center justify-center rounded-[12px] shadow-md border-2" style="border-color: var(--primary);">
            <div class="relative w-full h-full rounded-lg shadow-lg font-bold flex flex-col" style="font-family: 'Fira Sans', sans-serif;">
                <!-- Botón de ayuda arriba a la derecha -->
                <div class="absolute top-2.5 right-2.5 z-10 flex items-center justify-end">
                    <div class="relative group">
                        <!-- Botón de ayuda -->
                        <a
                            id="toggleLegend"
                            title="Instrucciones de uso"
                            class="bg-[#c9c0f5] text-[#1B475D] text-[1.4rem] font-bold px-4 mx-2 py-2 rounded-[10px] cursor-pointer border-none inline-flex items-center justify-center">
                            <img src="{{ asset('images/SIGN.png') }}" alt="Ayuda" class="w-5 h-5 object-contain" />
                        </a>

                        <!-- Leyenda flotante -->
                        <div
                            id="floatingLegend"
                            class="absolute top-0 left-full ml-3 w-[320px] bg-white text-[#1B475D] border border-[#ccc] rounded-lg shadow-xl p-5 text-sm z-50 hidden group-hover:block">
                            <h3 class="font-bold mb-4 text-base">Instrucciones de uso</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <div class="w-6 text-center">
                                        <i class="fas fa-expand text-[1rem] text-[var(--primary)]"></i>
                                    </div>
                                    <p class="text-sm leading-snug">
                                        <b>Pantalla completa:</b> Haz clic para ampliar la visualización del modelo.
                                    </p>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 text-center">
                                        <i class="fas fa-sync-alt text-[1rem] text-[var(--primary)]"></i>
                                    </div>
                                    <p class="text-sm leading-snug">
                                        <b>Reiniciar vista:</b> Restaura la orientación inicial del modelo.
                                    </p>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 text-center">
                                        <i class="fas fa-mouse-pointer text-[1rem] text-[var(--primary)]"></i>
                                    </div>
                                    <p class="text-sm leading-snug">
                                        <b>Ver detalles:</b> Haz clic sobre un átomo para obtener información específica.
                                    </p>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 text-center">
                                        <i class="fas fa-cogs text-[1rem] text-[var(--primary)]"></i>
                                    </div>
                                    <p class="text-sm leading-snug">
                                        <b>Modo de vista:</b> Cambia entre estilos como esferas, cartoon, bastones o superficie.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Controles abajo -->
                <div class="absolute left-2.5 right-2.5 bottom-2.5 z-10 flex justify-between items-center gap-2 min-h-[50px] px-4 py-2 rounded-lg">
                    <!-- Selector de vistas a la izquierda -->
                    <select id="renderMode"
                        class="w-max h-9 px-1 py-2 border-2 border-[#00455e] text-[14px] bg-white rounded-lg font-bold focus:outline-none transition-colors duration-300">
                        <option value="sphere">Vista esferas CPK</option>
                        <option value="cartoon">Vista cartoon</option>
                        <option value="surface">Vista superficie</option>
                        <option value="stick">Vista bastones</option>
                    </select>
                    <!-- Botones a la derecha -->
                    <div class="flex gap-2">
                        <button
                            class="w-max h-9 px-1 flex items-center justify-center gap-2 bg-[var(--secondary)] text-[0.9rem] font-bold rounded-lg cursor-pointer border-2 border-[var(--primary)] transition-colors duration-300"
                            id="fullscreenButton">
                            <i class="fas fa-expand"></i> Pantalla completa
                        </button>
                        <button
                            class="w-max h-9 px-1 flex items-center justify-center gap-2 bg-[var(--accent)] text-[0.9rem] font-bold rounded-lg cursor-pointer border-2 border-[#00455e] transition-colors duration-300"
                            id="resetViewButton">
                            <i class="fas fa-sync-alt"></i> Reiniciar vista
                        </button>
                    </div>
                </div>
                <!-- Visor 3D -->
                <div id="viewer" class="w-full h-full shadow-lg overflow-hidden"></div>
            </div>
        </div>

        <!-- Panel de carga y tabla -->
        <div class="w-full lg:w-1/2 flex-shrink-0 flex items-center">
            <div class="p-5 w-full max-w-[600px] min-w-[320px] mx-auto overflow-hidden break-words whitespace-normal box-border rounded-[12px] shadow-md border-2" style="border-color: var(--primary);">
                <div class="mb-4">
                    <h3 class="text-3xl font-bold mb-2 text-center">Busca tu archivo PDB</h3>
                    <!-- Formulario para cargar archivo -->
                    <form id="uploadForm" enctype="multipart/form-data" class="flex flex-col md:flex-row gap-3 justify-between items-center m-4">
                        @csrf
                        <!-- Botón Buscar -->
                        <div class="w-full md:w-[48%]">
                            <label for="file"
                                class="w-full block bg-[var(--info)] text-white py-3 text-center rounded-lg cursor-pointer text-base font-semibold transition-colors duration-300">
                                Buscar
                            </label>
                            <input type="file" id="file" name="file" accept=".pdb" class="hidden" required>
                        </div>
                        <!-- Botón Renderizar -->
                        <div class="w-full md:w-[48%]">
                            <button type="submit" id="renderButton"
                                class="w-full flex items-center justify-center gap-2 py-3 bg-[#00455e] text-white border-none rounded-lg cursor-pointer text-base font-bold transition-colors duration-300 disabled:bg-gray-400 disabled:cursor-not-allowed">
                                <i class="fas fa-play"></i> Renderizar
                                <span class="loader hidden"></span>
                            </button>
                        </div>
                    </form>
                    <!-- Mensaje de error -->
                    <div id="error-message" class="text-red-600 text-sm font-bold mb-2" style="display: none;"></div>
                    <div id="toast"
                        class="bg-[#f44336] text-white px-5 py-2 rounded-lg mt-2 text-base"
                        style="display: none;">El archivo es demasiado grande. Intente comprimirlo antes de subirlo.</div>
                    <!-- Tabla de información -->
                    <table class="w-full mt-6">
                        <tr>
                            <td class="py-1 px-2 border-b-4 border-gray-200">Nombre del archivo:</td>
                            <td class="py-1 px-2 border-b-4 border-gray-200" id="filename"></td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 border-b-4 border-gray-200">Átomos:</td>
                            <td class="py-1 px-2 border-b-4 border-gray-200" id="atoms"></td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 border-b-4 border-gray-200">Cadenas:</td>
                            <td class="py-1 px-2 border-b-4 border-gray-200" id="chains"></td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 border-b-4 border-gray-200">Residuos:</td>
                            <td class="py-1 px-2 border-b-4 border-gray-200" id="residues"></td>
                        </tr>
                        <tr>
                            <td class="py-1 px-2 border-b-4 border-gray-200">Tamaño:</td>
                            <td class="py-1 px-2 border-b-4 border-gray-200" id="size"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection