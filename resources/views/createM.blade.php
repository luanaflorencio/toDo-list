<x-app-layout>
    <x-slot name="header" class="bg-white shadow">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __("Cadastrar Membro" ) }}
      </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="mr-2">
              <div class="p-4">
                <div class="p-6 bg-white border-b border-gray-200">
    <form method="post" action="{{route('create-membro')}}">
        @csrf
    
        <div style="margin-left: 26%">
          <div>
            <x-label for="email" :value="__('E-mail:')"/>
            <x-input autocomplete="off" id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" style="width:60%" required autofocus/>
        </div>
        
        <div>
            <x-label for="nome" :value="__('Nome:')"/>
            <x-input autocomplete="off" id="nome" class="block mt-1 w-full" type="text" name="nome" minlength="5" :value="old('nome')" style="width:60%" required autofocus/>
        </div>
        </div>
            
        <x-button style="background-color:#374151" class="ml-72 bg-blue-500 hover:bg-blue-400 mt-8">
            {{ __('Enviar') }}
            </x-button>
    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
