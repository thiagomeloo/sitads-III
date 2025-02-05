<div>
    <input type="text" wire:model="titulo">
    <input type="text" wire:model="descricao">

    <button wire:click="adicionar">Adicionar</button>

    <ul>
        @foreach ($this->pendentes as $key => $tarefa)
            <li>
                {{ $tarefa->titulo }} - {{ $tarefa->descricao }}

                <button wire:click="concluir({{ $tarefa->id }})">Concluir</button>
                <button wire:click="remover({{ $tarefa->id }})">Remover</button>
            </li>
        @endforeach
    </ul>

    <hr>

    <ul>
        @foreach ($this->concluidas as $key => $tarefa)
            <li>
                {{ $tarefa->titulo }} - {{ $tarefa->descricao }}

                <button wire:click="reabrir({{ $tarefa->id }})">Reabrir</button>
                <button wire:click="remover({{ $tarefa->id }})">Remover</button>
            </li>
        @endforeach
    </ul>
</div>
