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
                    <div class="pb-4">
                        <a href="{{ route('citas.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    </div>
                    <form action="{{ route('citas.update', $citasMedicas->id) }}" method="post">
                        @csrf
                        <div class="pb-4">
                            <label for="">{{ __('Asistencia del paciente:') }} </label>
                            <select name="asistencia_paciente" id="asistencia_paciente">
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div>
                            <input type="submit" value="Confirmar" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
