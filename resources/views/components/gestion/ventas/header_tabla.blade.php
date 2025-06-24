
<div class="flex items-center justify-between p-4 ">
    <div>
        <h3 class="text-lg font-semibold text-slate-800">Lista de Ventas</h3>
        <p class="text-slate-500">Revisar bien antes de editar.</p>
    </div>
    <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
        {{-- Agregar Reporte --}}
        @if(auth()->user()->tienePermiso('Agregar Compras'))
        <a href="{{ route('venta.reporte', request()->only(['cliente_id', 'fecha_inicio', 'fecha_fin'])) }}"
            class="flex select-none items-center gap-2 rounded bg-red-600 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-red-900/10 transition-all hover:shadow-lg hover:shadow-red-900/20 hover:bg-red-700 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="2"
                class="w-4 h-4">
                <path
                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
            </svg>
            Generar Reporte
        </a>

                {{-- Botón para generar reporte Word --}}
        <a href="{{ route('venta.reporte.word', request()->only(['cliente_id', 'fecha_inicio', 'fecha_fin'])) }}"
            class="flex select-none items-center gap-2 rounded bg-blue-700 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-blue-900/10 transition-all hover:shadow-lg hover:shadow-blue-900/20 hover:bg-blue-800 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="2"
                class="w-4 h-4">
                <rect x="4" y="4" width="16" height="16" fill="#fff"/>
                <text x="7" y="17" font-size="10" fill="#2563eb" font-family="Arial" font-weight="bold">W</text>
            </svg>
            Reporte Word
        </a>
        @endif


        {{-- Agregar Proveedor --}}
        @if(auth()->user()->tienePermiso('Agregar Ventas'))
        <a href="{{ route('venta.create') }}"
            class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                stroke-width="2" class="w-4 h-4">
                <path
                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                </path>
            </svg>
            Agregar Venta
        </a>
        @endif
    </div>
</div>
@if (session('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="mb-4 rounded bg-green-100 text-green-800 px-4 py-2 transition-all duration-500">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
        class="mb-4 rounded bg-red-100 text-red-800 px-4 py-2 transition-all duration-500">
        {{ session('error') }}
    </div>
@endif