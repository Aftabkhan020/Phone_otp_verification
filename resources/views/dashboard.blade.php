<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<button> <a href="{{route('Add.company')}}">Add your company</a></button>
    
</x-app-layout>
