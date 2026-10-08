<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    public function store(){
        Ambiente::create([
            "nome"=>$this->nome,
            "descricao"=>$this->descricao,
            "status"=>$this->status
        ]);
    }

    public function render()
    {
        session()->flash('message','Ambiente Cadastrado');
        return response()->json('livewire.ambiente.ambiente-index');
    }
}
