<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="pb-4">
                        <a href="{{ route('pacientes.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Volver</a>
                    </div>
                    <div>
                        <form action="{{ route('pacientes.store') }}" method="post">
                            @csrf
                            <div class="pb-6 columns-3">
                                <div>
                                    <label for="">{{ __('Nombres Paciente:') }} </label>
                                    <input type="text" name="nombres_paciente" id="nombres_paciente" maxlength="100" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="">{{ __('Apellidos Paciente:') }} </label>
                                    <input type="text" name="apellidos_paciente" id="apellidos_paciente" maxlength="100" autocomplete="off" required>
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
                                    <input type="text" name="telefono_contacto" id="telefono_contacto" maxlength="11" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="">{{ __('Correo:') }} </label>
                                    <input type="email" name="email_contacto" id="email_contacto" maxlength="150" autocomplete="off" required>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Agregar Paciente" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
