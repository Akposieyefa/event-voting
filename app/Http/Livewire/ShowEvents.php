<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class ShowEvents extends Component
{
    //declaring public property
    public  $events;

    //getting all the events
    public  function  mount()
    {
        $this->events = Event::all();
    }

    public function render()
    {
        return view('livewire.show-events');
    }
}
