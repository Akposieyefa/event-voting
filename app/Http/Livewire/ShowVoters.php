<?php

namespace App\Http\Livewire;

use App\Models\Vote;
use Livewire\Component;

class ShowVoters extends Component
{
    //declaring public property
    public $image_id;


    //event listeners for viewing votes
    protected $listeners = [
        'votes' => 'votes',
    ];

    //method for vote event listeners
    public  function  votes($image_id){
        $this->image_id = $image_id;
    }
    public function render()
    {
        return view('livewire.show-voters' ,[
            'voters' => Vote::where('image_id', $this->image_id)->get()
        ]);
    }
}
