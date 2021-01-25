<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Events') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include('layouts._partials.success')
                    <livewire:create-events />
            </div>
        </div>
    </div>
</x-app-layout>
<style>
    form {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: auto;
    }

    button {
    width: 100%
    }
</style>
