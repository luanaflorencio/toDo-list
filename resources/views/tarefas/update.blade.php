<x-app-layout>
<x-slot name="header" class="bg-white shadow">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __("Editar Tarefa" ) }}
  </h2>
</x-slot>
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
<form method="post" action="{{route('update-tarefa' , ['id'=>$tarefa->id])}}">
    @csrf

    <div>
        <x-label for="nome" :value="__('Nome da tarefa')"/>
        <x-input  autocomplete="off" id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" value="{{ $tarefa->nome }}" minlength="5" maxlength="50" required autofocus/>
    </div>
    
    <div>
        <x-label for="descricao" :value="__('Descrição')"/>
        <x-input  autocomplete="off" id="descricao" class="block mt-1 w-full" type="text" name="descricao" maxlength="140" :value="old('descricao')" value="{{ $tarefa->descricao }}"/>
    </div>

    <div>
        <x-label for="finalizada" :value="__('Tarefa Concluída?')"/>
        <select style="width:50%" id="finalizada" name="finalizada">

            <option value="" disabled>...</option>
            <option @if($tarefa->finalizada == "1") ? selected : null @endif value="1">Sim</option>
            <option @if($tarefa->finalizada == "0") ? selected : null @endif value="0">Não</option>
        </select>
    </div>

    <div>
        <x-label for="datafinal" :value="__('Data que a tarefa foi Concluída')"/>
        <x-input autocomplete="off" id="datafinal" class="block mt-1 w-full" type="text" name="datafinal" :value="old('datafinal')" value="{{ $tarefa->datafinal }}" />
    </div>

    <div>
        <x-label for="prioridade" :value="__('Prioridade')"/>
        <select style="width:50%"  id="prioridade" name="prioridade" value="{{ $tarefa->prioridade }}">
            <option value="" selected disabled>...</option>
            <option @if($tarefa->prioridade == "baixa") ? selected : null @endif value="baixa">Baixa</option>
            <option @if($tarefa->prioridade == "media") ? selected : null @endif value="media">Média</option>
            <option @if($tarefa->prioridade == "alta") ? selected : null @endif value="alta">Alta</option>
        </select>
    </div>

    <x-button class="ml-72 bg-blue-500 hover:bg-blue-400 mt-8">
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
    