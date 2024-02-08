<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(isset($mensaje))
          <p class="text-white border">{{$mensaje}}</p>
        @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                  <form method="POST" action="/guardar/actividad">
                        @csrf
                   <div class="border-b border-gray-900/10 pb-12">
                      <h2 class="text-base font-semibold leading-7 text-white-900">Nueva Actividad</h2>
                      <p class="mt-1 text-sm leading-6 text-gray-600"></p>

                      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                          <label for="descripcion" class="block text-sm font-medium leading-6 text-white-900">Descripción:</label>
                          <div class="mt-2">
                            <input type="text" name="descripcion" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('descripcion')
                              <p style="color: red">{{$message}}</p>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                          <label for="fecha" class="block text-sm font-medium leading-6 text-white-900">Fecha:</label>
                          <div class="mt-2">
                            <input type="date" name="fecha" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('fecha')
                              <p style="color: red">{{$message}}</p>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                          <label for="tiempo" class="block text-sm font-medium leading-6 text-white-900">Tiempo (En Horas):</label>
                          <div class="mt-2">
                            <input type="number" name="tiempo" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('tiempo')
                              <p style="color: red">{{$message}}</p>
                            @enderror
                          </div>
                        </div>
                      </div>

                     <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear</button>
  </div> 

                    </div> 
                  </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
