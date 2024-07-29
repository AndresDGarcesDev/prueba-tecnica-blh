<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Información detallada') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Página para ver la información completa del médico.") }}
                    <form action="{{ route('medicos.show', $medicos->id) }}" method="get">
                        @csrf
                        @method('GET')
                        <div class="pb-4">
                            <label for="">{{ __('Nombre Médico:') }} </label>
                            <input type="text" name="" id="" value="{{ $medicos->nombre_medico }}" disabled>
                        </div>
                    </form>
                    <a href="{{ route('medicos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
