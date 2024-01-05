<x-layout title="{{$title}}">
    @vite(['resources/js/app.js'])
    <x-user-navbar></x-user-navbar>
    <main class="sm:px-36 py-28 px-8">
        {{$slot}}
    </main>
    <x-footer></x-footer>
</x-layout>