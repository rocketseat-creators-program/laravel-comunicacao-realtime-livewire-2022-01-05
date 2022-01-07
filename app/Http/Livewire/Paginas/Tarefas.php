<?php

namespace App\Http\Livewire\Paginas;

use App\Models\Tarefa;
use Livewire\Component;

class Tarefas extends Component
{
    public Tarefa $tarefa;

    public $rules = [
        'tarefa.titulo' => 'required|min:3|max:140',
        'tarefa.descricao' => 'required|min:3|max:500',
        'tarefa.concluida' => 'required',
    ];

    public function mount()
    {
        $this->tarefa = new Tarefa();
    }

    public function updatedTarefa()
    {
        $this->validate();
    }

    public function editar($id)
    {
        $this->tarefa = Tarefa::find($id);
    }

    public function salvar()
    {
        $this->validate();
        $this->tarefa->save();
        $this->tarefa = new Tarefa();
    }

    public function render()
    {
        return view('livewire.paginas.tarefas', [
            'tarefas' => Tarefa::all(),
        ]);
    }
}
