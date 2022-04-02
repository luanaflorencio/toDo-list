@foreach ($tarefa as $trf)
    <div class="mb-3">
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
            {{ $finalizada }}</p><br>
    </div>
    
@endforeach