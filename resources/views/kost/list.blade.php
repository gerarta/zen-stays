<x-user title="Wishlists">
    <h2 class="text-3xl mb-10 text-center"> Kost List Near Kemanggisan<h2>
            <div class="w-1/2 mx-auto mb-5">
                <form action="{{ route('kost.show-list') }}">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price Range
                    </label>
                    <select id="price" name="price_range"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled >Filter by Price Range</option>
                        <option value="0,500000" {{ request('price_range') == '0,500000' ? "selected" : "" }}>0 - 500.000</option>
                        <option value="500000,1000000" {{ request('price_range') == '500000,1000000' ? "selected" : "" }}>500.000 - 1.000.000</option>
                        <option value="1000000,1500000" {{ request('price_range') == '1000000,1500000' ? "selected" : "" }}>1.000.000 - 1.500.000 </option>
                        <option value="1500000,2000000" {{ request('price_range') == '1500000,2000000' ? "selected" : "" }}>1.500.000 - 2.000.000 </option>
                        <option value="2000000,2500000" {{ request('price_range') == '2000000,2500000' ? "selected" : "" }}>2.000.000 - 2.500.000 </option>
                        <option value="" >Show All</option>
                    </select>
                    <button type="submit" class="btn-orange mt-4">Filter </button>

                </form>
            </div>
            <div class="w-full grid md:grid-cols-3 grid-cols-2 gap-4">
                @foreach ($kosts as $kost)
                    <div class="card  p-0 overflow-hidden rounded-xl relative">
                        <div class="absolute top-3 left-3">
                            <button class="btn-orange text-sm font-semibold">{{ $kost->rating . __('/10') }} <i
                                    class="fa-solid fa-star"></i></button>
                            <div class="text-sm text-white rounded-lg py-2 font-semibold flex gap-2 ">
                                @if ($kost->gender == 'Male')
                                    <i class="fa-solid fa-male text-white bg-blue-500 border"></i>
                                @elseif($kost->gender == 'Female')
                                    <i class="fa-solid fa-female text-red-400"></i>
                                @else
                                    <i class="fa-solid fa-male text-white p-1 bg-blue-400 rounded"></i>
                                    <div class="w-[1px] bg-white"></div>
                                    <i class="fa-solid fa-female p-1 rounded bg-red-400 text-white"></i>
                                @endif
                            </div>
                        </div>
                        <img src="{{ $kost->picture[0]->link }}" class="object-cover h-[300px] object-center"
                            alt="">
                        <div class="p-3">
                            <h2 class="text-xl font-bold"> {{ $kost->name }}</h2>
                            <p class="font-light mb-6">
                                {{ $kost->address }}
                            </p>
                            <p class="text-end font-bold text-lg">
                                Rp {{ number_format($kost->price) }} / month
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
</x-user>
<style>

</style>