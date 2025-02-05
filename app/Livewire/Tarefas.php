<?php

namespace App\Livewire;

use App\Models\Tarefa;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Tarefas extends Component
{
    public $titulo;
    public $descricao;

    public function adicionar()
    {
        $tarefa = new Tarefa();
        $tarefa->titulo = $this->titulo;
        $tarefa->descricao = $this->descricao;
        $tarefa->save();

        $this->titulo = '';
        $this->descricao = '';
    }

    #[Computed]
    public function pendentes()
    {
        return Tarefa::where('concluida', false)->get();
    }

    #[Computed]
    public function concluidas()
    {
        return Tarefa::where('concluida', true)->get();
    }

    public function concluir($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->concluida = true;
        $tarefa->save();
    }

    public function remover($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
    }

    public function reabrir($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->concluida = false;
        $tarefa->save();
    }

    public function render()
    {
        return view('livewire.tarefas');
    }
}
