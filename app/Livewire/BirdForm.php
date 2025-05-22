<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;
use Livewire\Attributes\validate;

class BirdForm extends Component
{

    #[validate('required|integer')]
    public int $count;
    
    #[validate('required|string')]
    public string $note;

    public function submit()
    {
        // $this->validate([
        //     'count' => 'required|integer',
        //     'note' => 'required|string',
        // ]);
        $this->validate();

        Entry::create([
            'count' => $this->pull('count'),
            'note' => $this->pull('note')
        ]);
        $this->reset();
    }
    

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
