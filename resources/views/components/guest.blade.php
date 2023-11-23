<x-layout title="{{$title}}">
    <x-navbar-guest></x-navbar-guest>
    <main>
        {{$slot}}
    </main>
    <x-footer></x-footer>
</x-layout>