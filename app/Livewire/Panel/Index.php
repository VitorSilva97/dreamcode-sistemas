<?php

namespace App\Livewire\Panel;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Painel - DreamCode Sistemas')]
    public function render()
    {
        return view('livewire.panel.index');
    }
}
