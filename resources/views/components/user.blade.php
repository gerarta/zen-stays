<x-layout title="{{$title}}">
    <x-user-navbar></x-user-navbar>
    <main class="sm:px-36 px-8 sm:py-28">
        {{$slot}}
    </main>
    <x-footer></x-footer>
</x-layout>