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
                        <a href="{{ route('medicos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    </div>
                    <div>
                        <form action="{{ route('medicos.store') }}" method="post">
                            @csrf
                            <div class="pb-6 columns-3">
                                <div>
                                    <label for="">{{ __('Nombres Médico:') }} </label>
                                    <input type="text" name="nombre_medico" id="nombre_medico" maxlength="100" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="">{{ __('Apellidos Médico:') }} </label>
                                    <input type="text" name="apellido_medico" id="apellido_medico" maxlength="100" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="">{{ __('Tipo de documento:') }} </label>
                                    <select name="fk_tipo_documento" id="fk_tipo_documento">
                                        @foreach ($tipoDocumento as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->descripcion_tipo_documento }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="pb-6 columns-3">
                                <div>
                                    <label for="">{{ __('Número de documento:') }} </label>
                                    <input type="text" name="numero_documento" id="numero_documento" maxlength="11" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="">{{ __('Teléfono contacto:') }} </label>
                                    <input type="text" name="telefono_medico" id="telefono_medico" maxlength="11" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="">{{ __('Correo:') }} </label>
                                    <input type="email" name="correo_medico" id="correo_medico" maxlength="150" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="pb-6 columns-1">
                                <div>
                                    <label for="">{{ __('Especialidad:') }} </label>
                                    <select name="fk_especialidad_medico" id="fk_especialidad_medico">
                                        @foreach ($especialidadMedico as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->descripcion_especialidad }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Agregar Médico" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
