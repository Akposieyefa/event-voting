<div>

    <div class="flex flex-wrap flex--movie">
        @foreach($events as $key => $value)
        <div class="w-full md:w-full lg:w-11/12 max-w-4xl rounded overflow-hidden shadow-lg m-4 flex justify-between">
            <div class="md:flex-shrink-0">
                <img class="md:w-56"
                     src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/nAU74GmpUk7t5iklEp3bufwDq4n.jpg"
                     alt="A Quiet Place movie poster" />
            </div>
            <div class="flex flex-col flex-grow px-8 py-4 bg-color-333">
                <h3 class="font-bold text-4xl md:text-2xl lg:text-2xl text-gray-200 movie--title">{{$value->title}}</h3> <br>
                <div class="flex-grow">
                    <p class="text-xl md:text-base lg:text-base text-gray-100 leading-snug truncate-overflow">
                        {{$value->description}} <br><br>
                       <strong>Start Date  : </strong> <small>{{$value->start_date}}</small>
                        <br>
                        <strong>End Date  : </strong> <small>{{$value->end_date}}</small>
                    </p>
                </div>
                <div class="button-container flex justify-between mb-2">
                    <button class="text-lg mr-4 lg:text-sm text-gray-200"><strong>Posted Date  : </strong>  {{$value->created_at->diffForHumans()}}</button>
                    <button  wire:click="$emit('loadImage', {{$value->id}})" class="text-lg lg:text-sm font-bold py-2 px-4 rounded bg-green-700 text-orange-700">Images</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
