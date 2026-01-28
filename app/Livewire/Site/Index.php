<?php

namespace App\Livewire\Site;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.site')]
    public function render()
    {
        return view('livewire.site.index');
    }
}
