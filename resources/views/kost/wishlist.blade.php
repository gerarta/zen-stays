<x-user title="Wishlists">
    <h2 class="text-3xl mb-10">My Wishlist</h2>
    @foreach($kosts as $kost)
        <div class="flex flex-row justify-between card ps-0 py-0">
            <div class="kost-image kost-thumb w-4/12 h-[30vh]">
                <div class="flex flex-col justify-start py-2 px-2 place-items-start bg-black bg-opacity-10 w-full h-full gap-2">
                    <button class="btn-orange text-sm font-semibold">{{ $kost->rating . __('/10') }} <i class="fa-solid fa-star"></i></button>
                    <div class="bg-opacity-30 bg-black text-sm text-white rounded-lg px-3 py-2 font-semibold flex gap-2">
                        @if($kost->gender == 'Male')
                            <i class="fa-solid fa-male text-blue-400"></i>
                        @elseif($kost->gender == 'Female') 
                            <i class="fa-solid fa-female text-red-400"></i>
                        @else
                            <i class="fa-solid fa-male text-blue-400"></i>
                            <div class="w-[1px] bg-white"></div>
                            <i class="fa-solid fa-female text-red-400"></i>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-5/12 ps-6 py-4 place-items-start">
                <h3 class="text-2xl mb-4">{{ $kost->name }}</h3>
                <h4 class="text-xl mb-2">{{ __('Rp. ') . number_format($kost->price, 0, ',', '.') . __(' /month') }}</h4>
                <div class="text-lg text-red-600 italic">{{ $kost->fixed_quota - $kost->temp_quota . __(' Rooms available') }}</div>
            </div>
            <div class="flex flex-col w-3/12 py-4 gap-4 justify-end">
                <button class="btn-orange font-semibold">Remove from Wishlist <i class="fa-regular fa-heart"></i></button>
                <button class="btn-green font-semibold">Check <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    @endforeach
</x-user>
<style>
.kost-thumb{
    background-image: url({{ $kost->picture[0]->link }});
    background-size: cover;
    background-position: center;
}
</style>