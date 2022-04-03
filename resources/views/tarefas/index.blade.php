<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body  class="bg-gray-200 flex items-center justify-center h-screen">
        <a href="{{route('show-createT')}}" class="btn btn-primary mb-4">
            Criar uma nova tarefa
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z"/></svg>
        </a><br>
    
        @foreach ($tarefa as $trf)
        {{ $trf->user->name }}
        
        <div class="p-3 border mt-4 mb-5">
            <strong>Nome da Tarefa: </strong>
            <p>{{ $trf->nome}}</p>

            <strong>Prioridade: </strong>
            <p>
                @php
                if($trf->prioridade == "baixa"){
                    $prioridade = "Baixa";
                }
                else if ($trf->prioridade == "media"){
                    $prioridade = "Média";
                }
                else if($trf->prioridade == "alta"){
                    $prioridade = "Alta";
                }
                @endphp
                {{ $prioridade}}</p>

            <strong>Tarefa Concluída? </strong>
            <p>
            @php
            if($trf->finalizada == "1"){
                $finalizada = "Sim";
            }
            else if ($trf->finalizada == "0"){
                $finalizada = "Não";
            }
            @endphp
                {{ $finalizada }}</p> 
                @if ($trf->user_id == Auth::id())
                    <a href="{{ route('edit-tarefa' , ['id'=>$trf->id]) }}" style="border-color: #194765; margin-bottom: 10px;" class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="17px" viewBox="0 0 24 24" width="24px" fill="#194765"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,21l3.75,0L17.81,9.94l-3.75-3.75L3,17.25L3,21z M5,18.08l9.06-9.06l0.92,0.92L5.92,19L5,19L5,18.08z"/></g><g><path d="M18.37,3.29c-0.39-0.39-1.02-0.39-1.41,0l-1.83,1.83l3.75,3.75l1.83-1.83c0.39-0.39,0.39-1.02,0-1.41L18.37,3.29z"/></g></g></g></svg></a>
                <a href="{{ route('delete-tarefa' , ['id'=>$trf->id])}}" onclick="return confirm('Você tem certeza que quer excluir essa Tarefa?')" style="border-color: #BB2D3B; margin-bottom: 10px;" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" height="17px" viewBox="0 0 24 24" width="24px" fill="#BB2D3B"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></a>
                    @endif
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>  
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <div style="text-align: center;">
                            <strong>Descrição: </strong>
                            <p>{{ $trf->descricao}}</p>
                            </div>
                        </x-slot>
                    </x-dropdown>
        </div>
        
    @endforeach
   
    </body>
</html>
<script src="https://cdn.jsdeli.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>