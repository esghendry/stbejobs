<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $page;

    public $activeLang = 'nl';

    public $langText = [
        'nl' => [
            'title' => 'Direct solliciteren',
            'subtitle' => 'Vul hieronder je gegevens in. Wij doen de rest!',

            'labels' => [
                'first_name' => 'Voornaam',
                'last_name' => 'Achternaam',
                'email' => 'E-mailadres',
                'phone' => 'Telefoonnummer',
                'cv' => 'CV, motivatiebrief, etc. (optioneel)',
                'terms' => 'Ik ga akkoord met de',
                'terms_link' => 'voorwaarden',
                'submit' => 'Solliciteren',
            ],
        ],
        'en' => [
            'title' => 'Apply immediately',
            'subtitle' => 'Fill in your details below. We\'ll do the rest!',

            'labels' => [
                'first_name' => 'First name',
                'last_name' => 'Last name',
                'email' => 'E-mail address',
                'phone' => 'Phone number',
                'cv' => 'CV, motivation letter, etc. (optional)',
                'terms' => 'I agree with the',
                'terms_link' => 'terms and conditions',
                'submit' => 'Apply',
            ],
        ],
    ];

    public function mount() {}

    public function render()
    {
        return view('livewire.form', [
            'lang' => $this->langText[$this->activeLang],
        ]);
    }
}
