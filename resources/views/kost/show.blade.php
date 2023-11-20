<x-guest title="{{ $kost->name }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <section class="flex flex-row justify-center gap-16">
        <div class="flex flex-col w-5/12">
            <div class="mb-5 text-sm">
                <span class="underline">{{ $kost->province }}</span>
                {{__(' > ')}}
                <span class="underline">{{ $kost->city }}</span> 
                {{__(' > ')}}
                <span class="underline">{{ substr($kost->name, 0, 30) . __('...') }}</span> 
            </div>
            <div class="flex flex-col mb-5">
                <h2 class="text-xl">Virtual Tour</h2>
                <div class="virtual-tour-entry flex w-full h-[40vh] kost-image">
                    <div id="panorama" >
                        
                    </div>
                    {{-- <div class="bg-black text-white flex flex-col gap-3 w-full justify-center place-items-center rounded-lg bg-opacity-50">
                        <i class="fa-solid fa-vr-cardboard text-3xl"></i>
                        <div class="font-bold text-xl">Virtual Tour</div>
                        <div class="font-normal text-sm">Click Me!</div>
                    </div> --}}
                </div>
            </div>
            <div class="flex flex-col">
                <h2 class="text-xl">All Images</h2>
                <img src="{{ $kost->picture[0]->link }}" alt="" class="kost-image h-[40vh] object-cover object-center">
                <div class="flex flex-row">
                    <img src="{{ $kost->picture[1]->link }}" alt="" class="kost-image w-1/3 h-[20vh] object-cover object-center">
                    <img src="{{ $kost->picture[2]->link }}" alt="" class="kost-image w-1/3 h-[20vh] object-cover object-center">
                    <img src="{{ $kost->picture[3]->link }}" alt="" class="kost-image w-1/3 h-[20vh] object-cover object-center">
                </div>
            </div>
        </div>
        <div class="flex w-7/12 text-left flex-col">
            {{-- Owner --}}
            <div class="mb-2">
                <span class="font-normal">{{ __('Owner ·') }}</span>
                <span>{{ $kost->seller->name }}</span>
            </div>
            {{-- Kost Name --}}
            <h1 class="text-3xl font-bold mb-2">{{ $kost->name }}</h1>
            {{-- General Information --}}
            <div class="flex justify-start mb-2">
                {{-- Quota --}}
                <span>
                    <i class="fa-solid fa-bed text-greenDark"></i>
                    {{ __(' ') . $kost->fixed_quota - $kost->temp_quota . __(' Rooms Available ') }}
                </span>
                {{-- Rating --}}
                <span class="ms-3">
                    <i class="fa-solid fa-star text-orangeLight"></i>
                    {{ __(' ') . $kost->rating . __('/10 ') }}
                </span>
                {{-- Gender --}}
                <span class="ms-3">
                    @if($kost->gender == 'Male')
                        <i class="fa-solid fa-male text-blue-600"></i>
                        <span>{{ __(' Male') }}</span>
                    @elseif($kost->gender == 'Female') 
                        <i class="fa-solid fa-female text-red-600"></i>
                        <span>{{ __(' Female') }}</span>
                    @else
                        <i class="fa-solid fa-male text-blue-600"></i>
                        <i class="fa-solid fa-female text-red-600"></i>
                        <span>{{ __(' Male/Female') }}</span>
                    @endif
                </span>
            </div>
            {{-- Address --}}
            <div class="mb-4">
                <i class="fa-solid fa-location-dot text-red-400"></i>
                {{ __(' ') . $kost->address. __(', ') }}
                {{ __(' ') . $kost->city. __(', ') }}
                {{ __(' ') . $kost->province. __(' ') }}
            </div>
            <div>
                {{-- Specification --}}
                <h3 class="font-normal text-xl mb-2">Room Specifications</h3>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    @foreach ($kost->specification as $specification)
                        @if($specification->specification_type->type == 'Room Specification')
                            <div class="flex justify-start place-items-center text-sm">
                                <img src="{{ $specification->specification_type->icon }}" alt="" class="h-5">
                                <span class="ms-2">
                                    {{ $specification->specification_type->name}}
                                    @if($specification->description)
                                        <span class="text-gray-500">{{ __(' (') . $specification->description . __(')') }}</span>
                                    @endif
                                 </span>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{-- Room Facility --}}
                <h3 class="font-normal text-xl mb-2">Room Facilities</h3>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    @foreach ($kost->specification as $specification)
                        @if($specification->specification_type->type == 'Room Facility')
                            <div class="flex justify-start place-items-center text-sm">
                                <img src="{{ $specification->specification_type->icon }}" alt="" class="h-5">
                                <span class="ms-2">
                                    {{ $specification->specification_type->name}}
                                    @if($specification->description)
                                        <span class="text-gray-500">{{ __(' (') . $specification->description . __(')') }}</span>
                                    @endif
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{-- Bathroom Facility --}}
                <h3 class="font-normal text-xl mb-2">Bathroom Facilities</h3>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    @foreach ($kost->specification as $specification)
                        @if($specification->specification_type->type == 'Bathroom Facility')
                            <div class="flex justify-start place-items-center text-sm">
                                <img src="{{ $specification->specification_type->icon }}" alt="" class="h-5">
                                <span class="ms-2">
                                    {{ $specification->specification_type->name}}
                                    @if($specification->description)
                                        <span class="text-gray-500">{{ __(' (') . $specification->description . __(')') }}</span>
                                    @endif
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{-- Other Facility --}}
                <h3 class="font-normal text-xl mb-2">Other Facilities</h3>
                <div class="grid grid-cols-3 gap-2 mb-8">
                    @foreach ($kost->specification as $specification)
                        @if($specification->specification_type->type == 'Others')
                            <div class="flex justify-start place-items-center">
                                <img src="{{ $specification->specification_type->icon }}" alt="" class="h-5">
                                <span class="ms-2">
                                    {{ $specification->specification_type->name}}
                                    @if($specification->description)
                                        <span class="text-gray-500">{{ __(' (') . $specification->description . __(')') }}</span>
                                    @endif
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- Price --}}
            <div class="mb-4 flex w-full justify-end">
                <div class="card flex w-fit flex-col">
                    <h3 class="font-normal text-3xl mb-2 text-right">{{ __('Rp. ') . number_format($kost->price,0,',','.') . __(' /month') }}</h3>
                    <form class="flex flex-col items-end" action="{{ route('booking.check-out') }}" method="POST" enctype="multipart/form-data">
                        @method('GET')
                        <input type="text" value="{{ $kost->id }}" name="kost_id" hidden>
                        <div class="flex gap-2 mb-2 w-full justify-end">
                            <div class="flex flex-col place-items-start">
                                <label for="start_date" class="text-sm text-gray-600">{{ __('Start Date') }}</label>
                                <input class="rounded-lg w-" id="start_date" type="date" name="start_date" placeholder="" min="{{ $current_date }}">
                            </div>
                            <div class="flex flex-col place-items-start">
                                <label for="end_date" class="text-sm text-gray-600">{{ __('End Date') }}</label>
                                <input class="rounded-lg" id="end_date" type="date" name="end_date" placeholder="" min="{{ $current_date
                                 }}">
                            </div>
                        </div>
                        <div class="w-full flex justify-end gap-2">
                            @if (auth()->user())
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @method('GET')
                                    <input type="text" value="{{ $kost->id }}" name="kost_id" hidden>
                                    <button type="submit" class="px-4 py-2.5 rounded-full w-1/2 text-white font-bold bg-red-400 hover:bg-red-600">Add to Wishlist</button>
                                </form>
                            @endif
                            <button type="submit" class="px-4 py-2.5 rounded-full w-96 text-white font-bold bg-blue-400 hover:bg-blue-600">Book</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Rules --}}
            <div class="mb-4">
                <h3 class="font-normal text-3xl">Rules</h3>
                <div class="translate-x-5">
                    {!! $kost->rules !!}
                </div>
            </div>
        </div>
    </section>
    <script defer>
        const panorama = new PANOLENS.ImagePanorama( 'https://pannellum.org/images/alma.jpg' );
        const imageViewer = document.querySelector('#panorama');
        const viewer = new PANOLENS.Viewer({
            container = imageViewer,
            autoRotate = true,
            autoRotateSpeed = 0.3,
            controller = true,
        });
        viewer.add( panorama );
    </script>
</x-guest>
<style>
.virtual-tour-entry{
    /* background-image: url({{ $kost->picture[0]->link }}); */
    background-size: cover;
    background-position: center;
}
</style>