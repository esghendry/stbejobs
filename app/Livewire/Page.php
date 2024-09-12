<?php

namespace App\Livewire;

use App\Models\Page as PageModel;
use Livewire\Component;

class Page extends Component
{
    public ?PageModel $page = null;

    public function mount()
    {

        // check if $this->page is null
        if ($this->page === null) {
            $this->page = PageModel::find(1);
        }

    }

    public function render()
    {
        return view('livewire.page');
    }
}
