<?php

namespace App\Livewire\Panel\Customers;

use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Clientes - DreamCode Sistemas')]
    public function render()
    {
        return view('livewire.panel.customers.index');
    }
}
