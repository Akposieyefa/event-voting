<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image;
use App\Models\Vote;

class ShowImages extends Component
{
    /**
     * @var this livewire componet also take cares of the vote casting for
     * images related to an event
     */


    //declaring public properties
    public $event_id;
    public $image_id;
    public $vote;
    public $vote_id;


    //listeners listening to emitted functions
    protected $listeners = [
        'loadImage' => 'loadImage'
    ];

    //rules for image id validation
    protected $rules = [
        'image_id'  => 'required',
    ];

    //cast vote method
    public function  castVote($id, $event_id){
        $this->image_id = $id;
        $this->event_id = $event_id;
        $this->validate();

        //get votes in the vote table in other to validate the votes id
        $n = Vote::all();
        foreach ($n as $key => $value) {
            $this->vote_id = $value->image->event->id;
            if ($this->event_id  ==  $this->vote_id AND $value->user_id==  auth()->user()->id){
               dd('Sorry sir you cant cast vote more than once');
            }
        }
        //casting vote if validation is successful
       Vote::create([
            'user_id' => auth()->user()->id,
            'image_id' => $this->image_id
        ]);
        session()->flash('success', 'You have voted for this event ');
    }

    //load image event listener function
    public  function  loadImage($event_id){
        $this->event_id = $event_id;
    }

    public function render()
    {
        return view('livewire.show-images',[
            'images' => Image::where('event_id', $this->event_id)->get()
        ]);
    }
}
