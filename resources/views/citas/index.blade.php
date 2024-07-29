<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="divide-inherit">
                        <a href="{{ route('citas.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Agendar Cita</a>
                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table
                                        class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                                        <thead
                                        class="border-b border-neutral-200 font-medium dark:border-white/10">
                                            <tr>
                                                <th scope="col" class="px-6 py-4">Nombres Paciente</th>
                                                <th scope="col" class="px-6 py-4">Nombres Médico</th>
                                                <th scope="col" class="px-6 py-4">Fecha y hora cita</th>
                                                <th scope="col" class="px-6 py-4">Asistencía</th>
                                                <th scope="col" class="px-6 py-4">Editar Asistencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($citasMedicas) > 0)
                                                @foreach ($citasMedicas as $item)
                                                <tr id="AppModelsProducts{{ $item->id }}" class="border-b border-neutral-200 dark:border-white/10">
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->pacienteCita->nombres_paciente }} {{ $item->pacienteCita->apellidos_paciente }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->medicoCita->nombre_medico }} {{ $item->medicoCita->apellido_medico }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->horario_cita }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4">{{ $item->asistencia_paciente }}</td>
                                                    <td class="whitespace-nowrap px-6 py-4"><a href="{{ route('citas.edit', $item->id) }}">Editar</a></td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
