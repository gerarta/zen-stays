<x-layout title="{{$title}}">
    @vite(['resources/js/app.js'])
    <x-navbar-guest></x-navbar-guest>
    <main>
        {{$slot}}
    </main>
    <x-footer></x-footer>
</x-layout>