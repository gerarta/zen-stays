<x-user title="{{ __('Make Payment - ') . $booking->id }}">
    <section>
        <x-back-button></x-back-button>
        <h2 class="text-3xl mt-5 mb-2">Create Payment</h2>
        <div class="alert bg-indigo-100 mb-3 flex flex-col place-items-start gap-1">
            <div>Welcome to the payment submission form! 👋</div>
            <div>Please transfer to the following account:</div>
            <div class="text-lg font-semibold">{{ $booking->kost->seller->account_number . ' a.n. ' . $booking->kost->seller->name . ' (' . $booking->kost->seller->account_type . ')' }}</div>
        </div>
        <div class="card">
            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="flex flex-col place-content-start mb-3">
                    <label class="flex mb-1" for="booking_id">{{ __('Booking ID: ') }}</label>
                    <input class="rounded-full bg-gray-200" type="text" name="booking_id" value="{{ $booking->id }}" hidden>
                    <input class="rounded-full bg-gray-200" type="text" name="" value="{{ $booking->id }}" disabled>
                </div>
                <div class="flex flex-col place-content-start mb-3">
                    <label class="flex mb-1" for="amount">{{ __('Amount: ') }}</label>
                    <input class="rounded-full" type="text" name="amount" value="{{ $booking->kost->price }}" hidden>
                    <input class="rounded-full bg-gray-200" type="text" name="" value="{{ 'Rp. ' . number_format($booking->kost->price) }}" disabled>
                </div>
                <div class="flex flex-col place-content-start mb-3">
                    <label class="flex mb-1" for="account_name">{{ __('Account Name: ') }}</label>
                    <input class="rounded-full" type="text" name="account_name" value="{{ old('account_name') }}">
                    @error('account_name')
                        <label class="text-sm text-red-600">{!! $message !!}</label>
                    @enderror
                </div>
                <div class="flex flex-col place-content-start mb-3">
                    <label class="flex mb-1" for="account_number">{{ __('Account Number: ') }}</label>
                    <input class="rounded-full" type="text" name="account_number" value="{{ old('account_number') }}">
                    @error('account_number')
                        <label class="text-sm text-red-600">{!! $message !!}</label>
                    @enderror
                </div>
                <div class="flex flex-col place-content-start mb-3">
                    <label class="flex mb-1" for="payment_type">{{ __('Payment Type: ') }}</label>
                    <select class="rounded-full" type="text" name="payment_type" onchange="showPaymentForm(this)" value="1">
                        <option value="1" >Choose</option>
                        <option value="Bank">Bank</option>
                        <option value="E-Wallet">E-Wallet</option>
                    </select>
                    @error('payment_type')
                        <label class="text-sm text-red-600">{!! $message !!}</label>
                    @enderror
                </div>
                <div class="flex flex-col place-content-start mb-3" 
                    id="bank-providers" 
                    style="{{ old('payment_type') == 'Bank' ? '' : 'display:none' }}">
                    <label class="flex mb-1" for="payment_provider_id">{{ __('Payment Provider: ') }}</label>
                    <select class="rounded-full" type="text" name="payment_provider_id" value="{{ old('payment_provider_id') }}">
                        @foreach ($payment_providers as $payment_provider)
                            @if ($payment_provider->payment_type == 'Bank')
                                <option value="{{ $payment_provider->id }}">{{ $payment_provider->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('payment_provider')
                        <label class="text-sm text-red-600">{!! $message !!}</label>
                    @enderror
                </div>
                <div class="flex flex-col place-content-start mb-3" 
                    id="ewallet-providers"
                    style="{{ old('payment_type') == 'E-Wallet' ? '' : 'display:none' }}">
                    <label class="flex mb-1" for="payment_provider_id">{{ __('Payment Provider: ') }}</label>
                    <select class="rounded-full" type="text" name="payment_provider_id" value="{{ old('payment_provider_id') }}">
                        @foreach ($payment_providers as $payment_provider)
                            @if ($payment_provider->payment_type == 'E-Wallet')
                                <option value="{{ $payment_provider->id }}">{{ $payment_provider->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('payment_provider')
                        <label class="text-sm text-red-600">{!! $message !!}</label>
                    @enderror
                </div>
                <div class="flex flex-col place-content-start mb-5">
                    <label class="flex mb-1" for="payment_proof">{{ __('Payment Proof: ') }}</label>
                    <input class="rounded-full border-[3px]" type="file" name="payment_proof" value="{{ old('payment_proof') }}">
                    @error('payment_proof')
                        <label class="text-sm text-red-600">{!! $message !!}</label>
                    @enderror
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit" class="btn-green w-1/2 font-semibold">Submit Payment</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        function showPaymentForm(selected) {
            if (selected.value == 'Bank') {
                document.getElementById("bank-providers").style.display = 'flex';
                document.getElementById("ewallet-providers").style.display = 'none';
            } else {
                document.getElementById("bank-providers").style.display = 'none';
                document.getElementById("ewallet-providers").style.display = 'flex';
            }
        }
    </script>
</x-user>