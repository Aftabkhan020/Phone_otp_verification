<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<form action="/user" method="post">
    {{csrf_field()}}
    Phone<br><input type="phone" placeholder="0123456" name="phone"><br>
    <input type="submit" value="submit">
</form>
    
</x-app-layout>