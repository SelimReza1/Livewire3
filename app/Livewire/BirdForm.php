<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $count;
    public string $note;

    public function submit()
    {
        Entry::create([
            'count' => $this->pull('count'),
            'note' => $this->pull('note')
        ]);
        $this->reset();
    }
    

    public function render()
    {
        return view('livewire.bird-form');
    }
}
