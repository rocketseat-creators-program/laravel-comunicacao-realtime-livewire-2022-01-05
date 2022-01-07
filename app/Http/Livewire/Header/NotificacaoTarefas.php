<?php

namespace App\Http\Livewire\Header;

use App\Models\Tarefa;
use Livewire\Component;

class NotificacaoTarefas extends Component
{
    public $tarefasPendentes = 0;

    public function atualizarContador()
    {
        $this->tarefasPendentes = Tarefa::where('concluida', false)->count();
    }

    public function render()
    {
        return view('livewire.header.notificacao-tarefas');
    }
}
