<div><br>
        <div>
            @include('layouts._partials.success')
        </div>
        <body class="flex justify-center items-center h-screen bg-blue-lightest">
        @foreach($images as $image)
            <div id="app" class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest">
                <img class="w-1/2 h-full rounded-l-sm"  src="{{asset('storage/uploads/'.$image->image) }}" alt="Room Image">
                <div class="w-full flex flex-col">
                    <div class="p-4 pb-0 flex-1">
                        <h3 class="font-light mb-1 text-grey-darkest">{{$image->event->title}}</h3>
                        @admin
                            <span class="text-5xl text-grey-darkest" wire:html="voteCount({{$image->id}})">Votes <span class="text-lg"></span>{{count(getVoteCount($image->id))}}</span>
                        @endadmin
                    </div>
                    <div class="button-container justify-between mb-2">&nbsp &nbsp &nbsp
                        @admin
                            <button wire:click="$emit('votes', {{$image->id}})" class="text-lg lg:text-sm font-bold py-2 px-4 rounded bg-blue-700 text-light-600">
                               Voters
                            </button>
                        @else
                            <button wire:click="castVote({{$image->id}}, {{$image->event->id}})" class="text-lg lg:text-sm font-bold py-2 px-4 rounded bg-blue-700 text-light-600">
                                Vote Image
                            </button>
                        @endadmin
                    </div>
                </div>
            </div><br>
        @endforeach
        </body>

</div>
