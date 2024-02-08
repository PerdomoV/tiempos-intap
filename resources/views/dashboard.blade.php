<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
      <a class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{route('actividad.create')}}">Crear actividad+</a>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-white uppercase">actividades:</h1>
                    @foreach($actividades as $actividad)
                      <div class="w-1/3 border border-white rounded-lg p-4">
                        <p class="uppercase font-bold">Actividad:</p>
                        <p>{{$actividad->descripcion}}<p>
                        <p><span class="uppercase font-bold">Fecha:</span> {{$actividad->fecha}}</p>
                        <p><span class=" uppercase font-bold">Tiempo en Horas:</span> {{$actividad->tiempo}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
