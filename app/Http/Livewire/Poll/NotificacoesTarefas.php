<?php

namespace App\Http\Livewire\Poll;

use App\Models\Tarefa;
use Livewire\Component;

class NotificacoesTarefas extends Component
{
    public $qtdeTarefas = 0;

    public function contadorTarefas()
    {
        $this->qtdeTarefas = Tarefa::where('concluida', false)->count();
    }

    public function mount()
    {
        $this->contadorTarefas();
    }

    public function render()
    {
        return view('livewire.poll.notificacoes-tarefas');
    }
}
