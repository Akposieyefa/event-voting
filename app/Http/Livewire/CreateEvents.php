<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use App\Models\Event;
use App\Models\Image;
use Livewire\Component;
class CreateEvents extends Component
{
    use WithFileUploads;

    //declaring public properties
    public $title;
    public $description;
    public $start_date;
    public $end_date;
    public $photos = [];


    //setting validation rules
    protected $rules = [
        'title' => 'required',
        'description'  => 'required',
        'start_date' => 'required',
        'end_date'  => 'required',
        'photos.*' => 'image',
    ];


    // create event method
    public function createEvent() {

        $this->validate();

      $event =  Event::create([
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ]);
        foreach ($this->photos as $photo) {
           $photo->store('photos');
            $filenameWithExt = $photo->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME );
            $extension = $photo->getClientOriginalExtension();
            $fileNameToStore = $filename  .'_'.time().'.'.$extension;
            $path = $photo->storeAs('public/uploads', $fileNameToStore);
            Image::create([
                'event_id' => $event->id,
                'image' =>  $fileNameToStore
            ]);
        }
        session()->flash('success', 'Event posted successfully');
    }//end of create event method

    public function render()
    {
        return view('livewire.create-events');
    }
}
