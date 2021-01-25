<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Events') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @admin
        <div class="w-12/12 ">
            <livewire:show-voters />
        </div>
        @endadmin
        <div class="w-12/12">
            <div class="flex flex-row">
                <div class="w-6/12">
                    <livewire:show-events />
                </div>
                <div class="w-6/12">
                    <livewire:show-images />
                </div>
            </div>


        </div>
    </div>


</x-app-layout>
<style>

    .flex--movie {
        max-width: 80%;
        margin: 0 auto;
    }

    .bg-color-333 {
        background-color: #333;
    }

    .movie--year {
        font-variant-numeric: ordinal;
        font-weight: 700;
        color: #fff;
    }

    .transition{
        transition: all .2s ease-out;
    }

    .h-60{
        height: 14rem;
    }

    .w-128{
        width: 32rem;
    }

</style>
