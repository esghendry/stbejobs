<?php

namespace App\Livewire;

use App\Models\Lead;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

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

    #[Validate('required')]
    public $firstName;

    #[Validate('required')]
    public $lastName;

    #[Validate('required|email')]
    public $email;

    #[Validate('required')]
    public $phone;

    #[Validate(['files.*' => 'mimes:pdf,doc,docx,jpg,jpeg,png|file|max:2048'])]
    public $files;

    #[Validate('required')]
    public $consent;

    public $source;

    public function submit()
    {
        if (! $this->consent) {
            return;
        }

        // save the submit as a Lead

        $lead = Lead::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'source' => $this->source ?? 'welcome',
            'status' => 'new',
        ]);

        if (is_array($this->files)) {
            foreach ($this->files as $file) {
                $lead->attachments()->create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $file->store("jobs/leads/{$lead->id}", 'do'),
                ]);
            }
        }

        // redirect to thank you page
        return redirect('/lead-bedankt');
    }

    public function render()
    {
        return view('livewire.form', [
            'lang' => $this->langText[$this->activeLang],
        ]);
    }
}
