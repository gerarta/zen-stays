<x-user title="Check Out">
    <x-back-button></x-back-button>
    <h2 class="text-3xl font-normal mt-5">Booking Confirmation</h2>
    <section class="flex sm:flex-row flex-col justify-center mt-8 gap-4">
        <div class="flex sm:w-5/12 flex-col">
            <img src="{{ $kost->picture[0]->link }}" alt="" class="h-[40vh] object-cover object-center rounded-md shadow-lg mb-5">
            <h3 class="text-2xl font-normal">{{ $kost->name }}</h3>
            <h4 class="text-base font-normal">{{ $kost->address }}</h4>
        </div>
        <form class="flex sm:w-7/12 flex-col" method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="card flex flex-col sm:px-20 px-10 py-10 bg-gradient-to-r from-white to-slate-50 gap-10">
                <div class="flex flex-col gap-2">
                    <h4 class="text-2xl font-normal mb-3">Booking Details:</h4>
                    {{-- Customer Name --}}
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-person"></i>
                            <label for="" class="ms-2">{{ __('Customer Name') }}</label>
                        </div>
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center place-items-center">{{ auth()->user()?->name ? auth()->user()->name : 'Joko' }}</div>
                    </div>
                    {{-- Starting Date --}}
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-calendar text-blue-400"></i>
                            <label for="" class="ms-2">{{ __('Starting Date') }}</label>
                        </div>
                        <input type="date" hidden value="{{ $start_date }}" name="start_date">
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center place-items-center">{{ $start_date }}</div>
                    </div>
                    {{-- End Date --}}
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-calendar text-red-400"></i>
                            <label for="" class="ms-2">{{ __('End Date') }}</label>
                        </div>
                        <input type="date" hidden value="{{ $end_date }}" name="end_date">
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center place-items-center">{{ $end_date }}</div>
                    </div>
                    {{-- Price --}}
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-tag"></i>
                            <label for="" class="ms-2">{{ __('Price') }}</label>
                        </div>
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center place-items-center">{{  __('Rp. '). number_format($kost->price, 0, ',', '.') }}</div>
                    </div>
                    {{-- Total --}}
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-dollar text-green-600"></i>
                            <label for="" class="ms-2">{{ __('Total') }}</label>
                        </div>
                        <input type="number" hidden value="{{ $kost->price * $total_months }}" name="total_amount">
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center place-items-center">{{  __('Rp. '). number_format($kost->price * $total_months, 0, ',', '.') }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h4 class="text-2xl font-normal mb-3">Payment Details:</h4>
                    {{-- Payment Interval --}}
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-arrows-spin text-sm"></i>
                            <label for="" class="ms-2">{{ __('Payment Interval') }}</label>
                        </div>
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center">{{ __('Once a Month') }}</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-arrows-spin text-sm"></i>
                            <label for="" class="ms-2">{{ __('Account Number') }}</label>
                        </div>
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center">{{ $kost->seller->account_number }}</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex w-1/3 place-items-center">
                            <i class="fa-solid fa-arrows-spin text-sm"></i>
                            <label for="" class="ms-2">{{ __('Account Type') }}</label>
                        </div>
                        <div class="flex rounded-lg border-[3px] w-1/2 justify-center">{{ $kost->seller->account_type }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h4 class="text-2xl font-normal mb-3">Agreement Details:</h4>
                    {{-- Agreement Details --}}
                    <div class="flex justify-between mb-2">
                        <label class="flex w-5/6 place-items-center text-justify" for="agreement_1">
                            {{ __('Residents are ready to obey all the rules set by the kost owner.') }}
                        </label>
                        <div class="flex w-1/6 justify-end place-items-center"><input id="agreement_1" type="checkbox" required></div>
                    </div>
                    <div class="flex justify-between">
                        <label class="flex w-5/6 place-items-center text-justify" for="agreement_2">
                            {{ __('Residents are willing to come and occupy the kost according to the rental start date and pay according to the nominal amount and before the applicable due date.') }}
                        </label>
                        <div class="flex w-1/6 justify-end place-items-center"><input id="agreement_2" type="checkbox" required></div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h4 class="text-2xl font-normal mb-3">Additional Details:</h4>
                    {{-- Additional Details --}}
                    <div class="flex justify-between mb-2">
                        <label class="flex w-full place-items-center text-justify">
                            {{ __('Kost owners are obliged to facilitate residents according to the facilities listed on the kost page.') }}
                        </label>
                    </div>
                    <div class="flex justify-between">
                        <label class="flex w-full place-items-center text-justify">
                            {{ __('All information about the kost listed on the kost is true without deductions or additions. The kost owner is responsible for any incorrect information.') }}
                        </label>
                    </div>
                </div>
                <div class="flex justify-center place-items-center flex-col gap-5">
                    <input type="text" value="{{ $kost->id }}" name="kost_id" hidden>
                    <button type="submit" class="w-1/2 btn-green text-lg">Confirm <i class="ms-2 fa-solid fa-arrow-right"></i></button>
                    <button type="button" class="w-fit btn-orange text-lg">Print Receipt <i class="ms-2 fa-solid fa-receipt"></i></button>
                    <div class="w-full text-red-400 text-base">*By clicking 'Check Out' I've read and agreed to the Terms and Conditions</div>
                </div>
            </div>
        </form>
    </section>
</x-user>