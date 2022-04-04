<x-app-layout>
    <x-slot name="header" class="bg-white shadow">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __("Criar nova Tarefa" ) }}
      </h2>
    </x-slot>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datafinal" ).datepicker({ dateFormat: "yy-mm-dd" });
    } );
    </script>
    <div class="py-12">
        <div class="max-w-7xl max-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="mr-2">
              <div class="p-4">
                <div class="p-6 bg-white border-b border-gray-200">
                  
                  <a href="{{route('show-tarefa')}}" style="background-color:#374151" class="btn btn-primary mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display:inline;" height="24px" viewBox="0 0 26 26" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none" opacity=".87"/><path d="M17.51 3.87L15.73 2.1 5.84 12l9.9 9.9 1.77-1.77L9.38 12l8.13-8.13z"/></svg>
                    Voltar para Listagem
                </a><br>

    <form method="post" action="{{route('create-tarefa')}}">
        @csrf
    
        <div style="margin-left: 26%">
          <div>
            <x-label for="nome" :value="__('Nome da tarefa')"/>
            <x-input  autocomplete="off" id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" minlength="5" maxlength="50" style="width:60%" required autofocus/>
        </div>
        
        <div>
            <x-label for="descricao" :value="__('Descrição')"/>
            <x-input  autocomplete="off" id="descricao" class="block mt-1 w-full" type="text" name="descricao" maxlength="140" :value="old('descricao')" style="width:60%"/>
        </div>
    
        <div>
            <x-label for="finalizada" :value="__('Tarefa Concluída?')"/>
            <select style="width:60%" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="finalizada" name="finalizada">
                <option value="" selected disabled>...</option>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
    
        <div>
            <x-label for="datafinal" :value="__('Data que a tarefa foi Concluída')"/>
            <x-input autocomplete="off" id="datafinal" class="block mt-1 w-full" type="text" name="datafinal" :value="old('datafinal')" style="width:60%"/>
        </div>
    
        <div>
            <x-label for="prioridade" :value="__('Prioridade')"/>
            <select style="width:60%;" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"  id="prioridade" name="prioridade">
                <option value="" selected disabled>...</option>
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
      </div>
        <x-button style="background-color: #374151" class="ml-72 bg-blue-500 hover:bg-blue-400 mt-8">
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
<script src="https://cdn.jsdeli.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>