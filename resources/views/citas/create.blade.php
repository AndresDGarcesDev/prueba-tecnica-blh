<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="pb-4">
                        <a href="{{ route('citas.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    </div>
                    <div>
                        <form action="{{ route('citas.store') }}" method="post">
                            @csrf
                            <div class="pb-6 columns-2">
                                <div>
                                    <label for="">{{ __('Paciente:') }} </label>
                                    <select name="fk_pacientes" id="fk_pacientes">
                                        @foreach ($pacienteCita as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->nombres_paciente }} {{ $item->apellidos_paciente }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="">{{ __('Médico:') }} </label>
                                    <select name="fk_medicos" id="fk_medicos">
                                        @foreach ($medicoCita as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->nombre_medico }} {{ $item->apellido_medico }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="pb-6 columns-1">
                                <div>
                                    <label for="">{{ __('Fecha Cita:') }}</label>
                                    <input type="datetime-local" name="horario_cita" id="horario_cita">
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Agendar Cita" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
