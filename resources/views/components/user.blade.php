<x-layout title="{{$title}}">
    <x-user-navbar></x-user-navbar>
    <main class="sm:px-36 py-28 px-8">
        {{$slot}}
    </main>
    <x-footer></x-footer>
</x-layout>