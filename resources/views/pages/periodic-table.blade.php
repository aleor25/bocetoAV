@extends('layouts.app')
@section('title', 'Tabla periodica')
@section('content')

<div class="max-w-6xl mx-auto px-[70px] py-8">
    <h1 class="text-3xl mb-4 font-bold text-[var(--primary)]">Tabla periódica</h1>

    <div class="relative flex flex-col items-center mb-4">
        <img src="{{ asset('images/tabp.jpg') }}" alt="Tabla periódica" class="max-w-full h-auto rounded-xl border border-gray-300 shadow tabla-img-tailwind cursor-zoom-in transition-transform duration-300 hover:scale-105" id="zoomable-image">
        <button class="zoom-icon-tailwind" onclick="openModal()">🔍</button>
        <p class="italic text-[var(--secondary)] mt-2">Fuente: (UDTcl, 2019)</p>
    </div>

    <!-- Modal para la imagen ampliada -->
    <div id="imageModal" class="modal-tailwind">
        <span class="close-modal-tailwind" onclick="closeModal()">&times;</span>
        <img class="modal-content-tailwind" id="fullImage">
    </div>

    @php
    $dropdowns = [
    '¿Qué es la tabla periódica?' => [
    'content' => 'Es una herramienta que organiza todos los elementos químicos conocidos, desde el más ligero (el hidrógeno) hasta los más pesados (elementos artificiales como el oganesón). Cada elemento es una sustancia pura que no puede descomponerse en otras más simples.',
    'type' => 'paragraph'
    ],
    '¿Cómo está organizada?' => [
    'content' => [
    'Por filas (llamadas periodos)' => [
    'Hay 7 periodos (filas horizontales).',
    'Indican el número de niveles de energía (capas electrónicas) que tiene un átomo.',
    'Por ejemplo, el sodio (Na) está en el periodo 3, eso significa que tiene 3 niveles de energía.'
    ],
    'Por columnas (llamadas grupos o familias)' => [
    'Hay 18 grupos (columnas verticales).',
    'Los elementos del mismo grupo tienen propiedades químicas parecidas.',
    'Ejemplo: El grupo 1 (metales alcalinos) incluye al litio (Li), sodio (Na) y potasio (K). Todos son muy reactivos con el agua.'
    ],
    'Por tipo de elementos' => [
    'Metales: Buenos conductores, brillantes, maleables. (Ej. Hierro, cobre, oro)',
    'No metales: Malos conductores, muchos son gases. (Ej. Oxígeno, nitrógeno)',
    'Metaloides: Propiedades intermedias. (Ej. Silicio)',
    'Gases nobles: No reaccionan fácilmente. (Ej. Helio, neón)',
    'Lantánidos y actínidos: Aparecen abajo de la tabla, son elementos pesados.'
    ]
    ],
    'type' => 'nested'
    ],
    'Datos útiles para memorizar la tabla' => [
    'content' => [
    'Hidrógeno (H) está arriba a la izquierda, es el primero y el más ligero.',
    'El grupo 18 son los gases nobles: no reaccionan casi con nada.',
    'Los elementos en el centro (bloque d) son los metales de transición (hierro, cobre, zinc).',
    'La línea en zigzag separa metales (izquierda) de no metales (derecha).',
    'Apréndete los elementos más usados (ver elementos más usados) y ubica sus posiciones en la tabla.'
    ],
    'type' => 'list'
    ]
    ];
    @endphp

    @foreach ($dropdowns as $titulo => $data)
    <div class="rounded-lg bg-gray-100 my-4 overflow-hidden shadow">
        <button class="w-full flex items-center justify-between text-left px-6 py-4 bg-[var(--primary)] text-white text-lg font-semibold dropdown-button-tailwind" onclick="toggleDropdown(this)">
            <span>{{ $titulo }}</span>
            <img src="{{ asset('images/arrow-down.png') }}" alt="Desplegar" class="ml-3 transition-transform duration-300 arrow-icon" style="width: 28px; height: 18px; min-width: 28px; min-height: 18px;">
        </button>
        <div class="dropdown-content-tailwind px-6 bg-white">
            @if($data['type'] == 'paragraph')
            <p>{{ $data['content'] }}</p>
            @elseif($data['type'] == 'list')
            <ul class="list-disc pl-6">
                @foreach($data['content'] as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            @elseif($data['type'] == 'nested')
            @foreach($data['content'] as $subtitulo => $items)
            <h3 class="font-bold">{{ $subtitulo }}</h3>
            <ul class="list-disc pl-6">
                @foreach($items as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            @endforeach
            @endif
        </div>
    </div>
    @endforeach

    <h2 class="text-2xl font-bold mt-10 mb-4 text-[var(--primary)]">Elementos más usados</h2>

    <div class="overflow-x-auto pb-4 px-2">
        <table class="w-full border-collapse shadow-lg rounded-2xl overflow-hidden border border-gray-300">
            <thead>
                <tr>
                    <th class="bg-[var(--primary)] text-white px-4 py-2 text-center border border-gray-300">Elemento</th>
                    <th class="bg-[var(--primary)] text-white px-4 py-2 text-center border border-gray-300">Símbolo</th>
                    <th class="bg-[var(--primary)] text-white px-4 py-2 text-center border border-gray-300">Usos comunes</th>
                </tr>
            </thead>
            <tbody style="color: #333;">
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Hidrógeno</td>
                    <td class="text-center border border-gray-300 px-4 py-2">H</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Combustible limpio (hidrógeno verde), forma parte del agua, presente en el universo.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Oxígeno</td>
                    <td class="text-center border border-gray-300 px-4 py-2">O</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Vital para la respiración, se usa en hospitales, soldaduras y en la formación del agua.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Carbono</td>
                    <td class="text-center border border-gray-300 px-4 py-2">C</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Base de la vida (en moléculas orgánicas), en combustibles, lápices, plásticos y acero.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Nitrógeno</td>
                    <td class="text-center border border-gray-300 px-4 py-2">N</td>
                    <td class="text-center border border-gray-300 px-4 py-2">78% del aire que respiramos, se usa en fertilizantes, alimentos y en medicina.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Hierro</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Fe</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Construcción, herramientas, estructuras, en la sangre (hemoglobina).</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Calcio</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Ca</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Formación de huesos y dientes, también en cemento y materiales de construcción.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Sodio</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Na</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Sal común (cloruro de sodio), importante en nervios y músculos.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Potasio</td>
                    <td class="text-center border border-gray-300 px-4 py-2">K</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Presión y ritmo cardíaco en el cuerpo humano.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Cobre</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Cu</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Excelente conductor eléctrico, usado en cables, monedas y electrónica.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Zinc</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Zn</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Prevención de oxidación, medicina, cuidado de la piel, sistema inmune.</td>
                </tr>
                <tr class="even:bg-gray-100 hover:bg-gray-200">
                    <td class="text-center border border-gray-300 px-4 py-2">Silicio</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Si</td>
                    <td class="text-center border border-gray-300 px-4 py-2">Chips, computadoras, vidrio, paneles solares.</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

@endsection