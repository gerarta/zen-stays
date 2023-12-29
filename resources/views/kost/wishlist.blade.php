<x-user title="Wishlists">
    <x-back-button></x-back-button>
    <section class="min-h-screen mt-5">
        <h2 class="text-3xl mb-10">My Wishlist</h2>
        @if(count($wishes) > 0) 
        @foreach($wishes as $wish)
            <div class="flex sm:flex-row flex-col justify-between card ps-0 py-0 pe-0">
                <div class="bg-center bg-cover kost-thumb sm:w-4/12 h-[30vh]" style="background-image: url({{ $wish->kost->picture[0]->link }});">
                    <div class="flex flex-col justify-start py-2 px-2 place-items-start bg-black bg-opacity-10 w-full h-full gap-2">
                        <button class="btn-orange text-sm font-semibold">{{ $wish->kost->rating . __('/10') }} <i class="fa-solid fa-star"></i></button>
                        <div class="bg-opacity-30 bg-black text-sm text-white rounded-lg px-3 py-2 font-semibold flex gap-2">
                            @if($wish->kost->gender == 'Male')
                                <i class="fa-solid fa-male text-blue-400"></i>
                            @elseif($wish->kost->gender == 'Female') 
                                <i class="fa-solid fa-female text-red-400"></i>
                            @else
                                <i class="fa-solid fa-male text-blue-400"></i>
                                <div class="w-[1px] bg-white"></div>
                                <i class="fa-solid fa-female text-red-400"></i>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:w-5/12 ps-6 py-4 place-items-start">
                    <h3 class="text-2xl mb-4">{{ $wish->kost->name }}</h3>
                    <h4 class="text-xl mb-2">{{ __('Rp. ') . number_format($wish->kost->price, 0, ',', '.') . __(' /month') }}</h4>
                    <div class="text-lg text-red-600 italic">{{ $wish->kost->fixed_quota - $wish->kost->temp_quota . __(' Rooms available') }}</div>
                </div>
                <div class="flex flex-col sm:w-3/12 py-4 gap-4 px-4 justify-end">
                    <form action="{{ route('kost.delete-wishlist', $wish->id) }}" method="POST" class="flex w-full">
                        @csrf
                        @method('DELETE')
                        <button class="btn-orange font-semibold w-full">Remove from Wishlist <i class="fa-regular fa-heart"></i></button>
                    </form>
                    <a href="{{ route('kost.show', $wish->kost->id) }}" class="flex w-full">
                        <button class="btn-green font-semibold w-full">Check <i class="fa-solid fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
        @endforeach
        @else
            <div class="text-xl font-semibold mb-6">We looked low and high yet still couldn't find anything...</div>
        @endif
    </section>
</x-user>
<style>
</style>