<x-guest title="{{ $kost->name }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <div class="sm:px-40 px-8 sm:py-24 py-8 pt-28">
        <x-back-button></x-back-button>
        <section class="flex sm:flex-row flex-col justify-center gap-16 py-8">
            <div class="flex flex-col sm:w-5/12">
                <div class="mb-5 text-sm">
                    <span class="underline">{{ $kost->province }}</span>
                    {{__(' > ')}}
                    <span class="underline">{{ $kost->city }}</span> 
                    {{__(' > ')}}
                    <span class="underline">{{ substr($kost->name, 0, 30) . __('...') }}</span> 
                </div>
                <div class="flex flex-col mb-5">
                    <h2 class="text-xl">Virtual Tour</h2>
                    <div class="grid grid-cols-2">
                        @for ($i = 0; $i < count($kost->picture); $i++)
                        @if ($kost->picture[$i]->type == 'Panorama')
                        <div class="virtual-tour-entry flex w-full h-[20vh] kost-image">
                            <div class="cursor-pointer bg-black text-white flex flex-col gap-1 w-full justify-center place-items-center rounded-lg bg-opacity-50" onclick="{{ 'vtmodal'.$i }}.showModal()">
                                <i class="fa-solid fa-vr-cardboard text-3xl"></i>
                                <div class="font-bold text-lg">Virtual Tour</div>
                                <div class="font-semibold text-xl text-center">{{ $kost->picture[$i]->name }}</div>
                                <div class="font-normal text-sm">Click Me!</div>
                            </div>
                        </div>
                        @endif
                        @endfor
                    </div>
                </div>
                <div class="flex flex-col">
                    <h2 class="text-xl">All Images <span class="text-sm">Click the image for larger view</span></h2>
                    <img src="{{ $kost->picture[0]->link }}" alt="" class=" cursor-pointer kost-image h-[40vh] object-cover object-center" onclick="mainimgmodal.showModal()">
                    <div class="grid grid-cols-3 gap-2">
                        @for ($i = 1; $i < count($kost->picture); $i++)
                            @if ($kost->picture[$i]->type == 'Normal')
                            <img src="{{ $kost->picture[$i]->link }}" alt="" class="cursor-pointer kost-image w-full h-[20vh] object-cover object-center" onclick="{{ 'imgmodal'.$i }}.showModal()">
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
            <div class="flex sm:w-7/12 text-left flex-col">
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
                    {{-- Near This Kost --}}
                    <h3 class="font-normal text-xl mb-2">Near This Kost</h3>
                    <div class="grid grid-cols-3 gap-2 mb-8">
                        @foreach ($kost->specification as $specification)
                            @if($specification->specification_type->type == 'Near This Kost')
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
                    <div class="card flex w-full flex-col">
                        <h3 class="font-normal text-3xl mb-2 text-right">{{ __('Rp. ') . number_format($kost->price,0,',','.') . __(' /month') }}</h3>
                        <form class="flex flex-col items-end" action="{{ route('booking.confirmation') }}" method="POST" enctype="multipart/form-data">
                            @method('GET')
                            @csrf
                            <input type="text" value="{{ $kost->id }}" name="kost_id" hidden>
                            <div class="flex gap-2 mb-2 w-full justify-end">
                                <div class="flex flex-1 flex-col place-items-end w-full">
                                    <label for="start_date" class="text-sm text-gray-600">{{ __('Start Date') }}</label>
                                    <input class="rounded-lg w-full" id="start_date" type="date" name="start_date" placeholder="" min="{{ $current_date }}">
                                    @error('start_date')
                                        <label for="" class="text-xs text-red-500">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="flex flex-1 flex-col place-items-end w-full">
                                    <label for="end_date" class="text-sm text-gray-600">{{ __('End Date') }}</label>
                                    <input class="rounded-lg w-full" id="end_date" type="date" name="end_date" placeholder="" min="{{ $current_date}}">
                                    @error('end_date')
                                        <label for="" class="text-xs text-red-500">{{ $message }}</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full flex justify-end gap-2">
                                <?php
                                    $full = false;
                                    if($kost->temp_quota > $kost->fixed_quota)
                                        $full = true;
                                ?>
                                @if($full)
                                <button type="button" disable class="w-full font-bold btn-gray">Fully booked</button>
                                @else
                                <button type="submit" class="w-full font-bold btn-blue">Book</button>
                                @endif
                            </div>
                        </form>
                        @if (auth()->user())
                            <?php 
                                $flag = false;
                                $wishes = Auth::guard('web')->user()->wish;
                                foreach($wishes as $wish){
                                    if($wish->kost_id == $kost->id)
                                    $flag = true;
                            }
                            ?>
                            <form action="{{ route('kost.add-wishlist') }}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                                <input type="text" value="{{ $kost->id }}" name="kost_id" hidden>
                                <button type="submit" class="mt-2 w-full btn-red font-semibold" {{ $flag ? 'hidden' : '' }}  >Add to Wishlist <i class="fa-solid fa-heart"></i></button>
                            </form>
                        @endif
                    </div>
                </div>
                {{-- Rules --}}
                <div class="mb-4">
                    <h3 class="font-normal text-3xl">Rules</h3>
                    <div class="translate-x-5">
                        {!! $kost->rules !!}
                    </div>
                </div>
                {{-- Review --}}
                <div>
                    <h3 class="font-normal text-3xl">Reviews</h3>
                    @if (auth()->user())
                        <?php 
                            $eligible = false;
                            foreach(Auth::guard('web')->user()->booking as $booking){
                                if($booking->kost->id == $kost->id) $eligible = true;
                            }
                        ?>
                        @if ($eligible)
                            <form class="flex flex-col w-full" enctype="multipart/form-data" method="POST" action="{{ route("review.store") }}">
                                @csrf
                                <div class="font-bold text-xl">Leave a review</div>
                                <div class="flex w-full mb-2 items-center">
                                    <div class="text-lg me-3">Rating</div>
                                    <input type="text" name="kost_id" value="{{ $kost->id }}" hidden>
                                    <span class="me-2">
                                        <input type="number" name="rating" class="w-16 rounded-lg" value="{{ old('rating') ?? 1 }}" min="1" max="10">
                                        / 
                                        <button>10 <i class="fa-solid fa-star text-yellow-400"></i> </button>
                                    </span>
                                    @error('rating')
                                        <span>
                                            <small class="text-red-400">
                                                <strong>{!! $message !!}</strong>
                                            </small>
                                        </span>
                                    @enderror
                                </div>
                                <textarea class="rounded-lg" name="review" rows="4">{{ old('review') }}</textarea>
                                @error('review')
                                    <span>
                                        <small class="text-red-400">
                                            <strong>{!! $message !!}</strong>
                                        </small>
                                    </span>
                                @enderror
                                <button class="btn-orange w-full mt-3" type="submit">Submit</button>
                            </form>
                        @else
                            <div class=" text-gray-600">You must book this kost at least once to leave a review</div>
                        @endif
                    @else
                        <div class="font-normal">You need to login to leave a review</div>    
                    @endif
                    <div class="mt-3">
                        @if ($kost->review->count() > 0)    
                            @foreach ($kost->review as $review)
                                <div class="flex flex-col w-full justify-start items-start card mb-4">
                                    <h5 class="text-lg">{{ $review->customer->name }}</h5>
                                    <div>{{ $review->review }}</div>
                                    <button class="btn-orange text-sm font-semibold mt-2">{{ $review->rating . __('/10') }} <i class="fa-solid fa-star"></i></button>
                                </div>
                            @endforeach
                        @else
                            <div class="text-xl">No reviews yet...</div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- Modals --}}
    @for ($i = 1; $i < count($kost->picture); $i++)
    @if ($kost->picture[$i]->type == 'Panorama')
    <dialog id="{{ 'vtmodal'.$i }}" class="modal">
        <div class="modal-box max-w-[50vw]">
            <div id="{{ 'panorama'.$i }}" class="min-h-[40vh] min-w-[40vw]"></div>
            <p class="py-4 text-sm text-center">Press ESC key or click outside to close</p>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    @endif
    @endfor
    <dialog id="mainimgmodal" class="modal">
        <div class="modal-box max-w-[50vw]">
            <img class="object-cover object-center" src="{{ $kost->picture[0]->link }}"></img>
            <p class="py-4 text-sm text-center">Press ESC key or click outside to close</p>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    @for ($i = 1; $i < count($kost->picture) - 1; $i++)
    @if ($kost->picture[$i]->type == 'Normal')
    <dialog id="{{ 'imgmodal' . $i }}" class="modal">
        <div class="modal-box max-w-[50vw]">
            <img class="object-cover object-center" src="{{ $kost->picture[$i]->link }}"></img>
            <p class="py-4 text-sm text-center">Press ESC key or click outside to close</p>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    @endif
    @endfor
    @for ($i = 1; $i < count($kost->picture); $i++)
    @if ($kost->picture[$i]->type == 'Panorama')
    <script defer>
        pannellum.viewer('{{ 'panorama'.$i }}', {
            "type": "equirectangular",
            "panorama": '{{ env('APP_URL') . $kost->picture[$i]->link }}'
        });
    </script>
    @endif
    @endfor
</x-user>
<style>

</style>