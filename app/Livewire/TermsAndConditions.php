<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class TermsAndConditions extends ModalComponent
{
    public $lang = 'nl';

    public static function modalMaxWidth(): string
    {
        return '3xl';
    }

    public function render()
    {
        return view("livewire.terms-and-conditions.{$this->lang}");
    }
}
