<x-user title="Profile Detail ">
    <section class="mb-5">
        <div class="text-2xl">{{ __('Welcome! ') }}
            <span class="text-deco text-3xl">{{ $user->name }}</span>
            {{ __(' 👋 ') }}
            <a class="text-gray-400 text-sm" href="{{ route('user.edit', $user->id) }}"><i class="fa-solid fa-pen"></i></a>
        </div>
    </section>
    <section>
        <h2 class="text-2xl mb-3">Booking history</h2>
        @if ($bookings->count())
                <div class="w-full grid md:grid-cols-3 grid-cols-2 gap-4">
                    @foreach ($bookings as $booking)
                        <div class="card  p-0 overflow-hidden rounded-xl relative" href="{{ route('kost.show', $booking->kost->id) }}">
                            <div class="absolute top-3 left-3">
                                <button class="btn-orange text-sm font-semibold">{{ $booking->kost->rating . __('/10') }} <i
                                        class="fa-solid fa-star"></i></button>
                                <div class="text-sm text-white rounded-lg py-2 font-semibold flex gap-2 ">
                                    @if ($booking->kost->gender == 'Male')
                                        <i class="fa-solid fa-male text-white bg-blue-500 border"></i>
                                    @elseif($booking->kost->gender == 'Female')
                                        <i class="fa-solid fa-female text-red-400"></i>
                                    @else
                                        <i class="fa-solid fa-male text-white p-1 bg-blue-400 rounded"></i>
                                        <div class="w-[1px] bg-white"></div>
                                        <i class="fa-solid fa-female p-1 rounded bg-red-400 text-white"></i>
                                    @endif
                                </div>
                            </div>
                            <img src="{{ $booking->kost->picture[0]->link }}" class="object-cover h-[300px] object-center"
                                alt="">
                            <div class="p-3">
                                <h2 class="text-xl font-bold"> {{ $booking->kost->name }}</h2>
                                <div class="font-light mb-1">
                                    {{ $booking->kost->address }}
                                </div>
                                <div class="font-semibold mb-2">
                                    Period: {{ $booking->start_date }} - {{ $booking->end_date }}
                                </div>
                                <div class="flex justify-between">
                                    <?php
                                        $date1 = new DateTime($booking->start_date);
                                        $date2 = new DateTime($booking->end_date);
                                        $interval = $date1->diff($date2);
                                    ?>
                                    <div>Payment Progress</div>
                                    <div>{{ $booking->temp_amount / $booking->kost->price . '/' . $interval->m }}</div>
                                </div>
                                <progress class="progress progress-success" value="{{ $booking->temp_amount / $booking->kost->price }}" max="{{ $interval->m }}"></progress>
                                <form class="flex justify-end" method="POST" action="{{ route('payment.create', $booking->id) }}">
                                    @csrf
                                    @method('GET')
                                    @if ($booking->temp_amount <  $booking->total_amount)
                                        <button type="submit" class="btn-orange font-semibold">Pay</button>
                                    @else
                                        <button type="button" disabled class="btn-green font-semibold">Fully Paid</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="font-semibold text-2xl text-center">No bookings found...</p>
                <p class="font-semibold text-xl text-center">Let's start finding the perfect kost for you!</p>
            @endif
    </section>
</x-user>
