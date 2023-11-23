@extends('layouts.auth')
@section('title', 'Register')
@section('content')
	<section class="min-h-screen min-w-full flex sm:flex-row flex-col-reverse bg-gray-100">
		<div class="sm:min-w-[50%] min-w-full sm:min-h-screen min-h-[64vh] sm:px-24 px-8 py-8 pt-24 bg-white shadow-md flex flex-col justify-center items-center">
			<!-- Logo ZenStays -->
			<div class="flex justify-start mb-4">
				<img src="/storage/assets/images/ThemeLogo.png" alt="Logo" class="w-1/6">
			</div>

			<div class="flex w-full font-medium text-left text-2xl">
				{{ __('Register') }}
			</div>
			<div class="flex w-full flex-col text-gray-600 text-sm text-left">
				<span>
					{{ __('Let\'s begin your journey of finding the best boarding house ') }}
				</span>
				<span class="italic">{{ ('Where Every Stay Feels Like a Homecoming.') }}</span>
			</div>

			<!-- Session Status -->
			<div class="mb-4 font-medium text-sm text-greenLight">
				{{ session('status') }}
			</div>

			<!-- Validation Errors -->
			@if ($errors->any())
				<div class="mb-4">
					<div class="font-medium text-red-600">
						{{ __('Whoops! Something went wrong.') }}
					</div>

					<ul class="mt-3 list-disc list-inside text-sm text-red-600">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form method="POST" action="{{ route('register') }}" class="flex flex-col w-full">
			@csrf

				<!-- name -->
				<div>
					<label for="name" class="flex font-medium text-sm text-gray-700">
						{{ __('Name') }}
					</label>
					<input id="name" name="name" type="text" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('name') }}" required autofocus>
				</div>

				<!-- gender -->
				<div class="mt-4">
					<label for="gender" class="flex font-medium text-sm text-gray-700">
						{{ __('Gender') }}
					</label>
					<div>
						<span class="me-4">
							<input id="male" name="gender" type="radio" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="Male" required autofocus>
							<label for="male">{{ __('Male') }}</label>
						</span>
						<span>
							<input id="female" name="gender" type="radio" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="Female" required autofocus>
							<label for="female">{{ __('Female') }}</label>
						</span>
					</div>
				</div>

				<!-- Email Address -->
				<div class="mt-4">
					<label for="email" class="flex font-medium text-sm text-gray-700">
						{{ __('Email') }}
					</label>
					<input id="email" name="email" type="email" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('email') }}" required autofocus>
				</div>

				<!-- Phone Number -->
				<div class="mt-4">
					<label for="phone_number" class="flex font-medium text-sm text-gray-700">
						{{ __('Phone Number') }}
					</label>
					<input id="phone_number" name="phone_number" type="number" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('phone_number') }}" required autofocus>
				</div>

				<!-- Date Of Birth -->
				<div class="mt-4">
					<label for="dob" class="flex font-medium text-sm text-gray-700">
						{{ __('Date of Birth') }}
					</label>
					<input id="dob" name="dob" type="date" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('dob') }}" required autofocus>
				</div>

				<!-- Address -->
				<div class="mt-4">
					<label for="address" class="flex font-medium text-sm text-gray-700">
						{{ __('Address') }}
					</label>
					<input id="address" name="address" type="text" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('address') }}" required autofocus>
				</div>

				<!-- job -->
				<div class="mt-4">
					<label for="job" class="flex font-medium text-sm text-gray-700">
						{{ __('Job') }}
					</label>
					<input id="job" name="job" type="text" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('job') }}" required autofocus>
				</div>

				<!-- Password -->
				<div class="mt-4">
					<label for="password" class="flex font-medium text-sm text-gray-700">
						{{ __('Password') }}
					</label>
					<input id="password" name="password" type="password" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
				</div>

				<div class="flex items-start justify-center flex-col mt-4 gap-2">
					<button type="submit" class="w-full flex justify-center text-center items-center btn-green">
						{{ __('Register') }}
					</button>
					<p class="text-sm text-gray-600">Already have an account? <a class="underline hover:text-greenDark" href="{{ route('login') }}">Login</a></p>
				</div>
			</form>
		</div>
		<div class="block sm:min-w-[50%] min-w-full sm:min-h-full min-h-[36px] bg-gray-200 shadow-md splash-register">
		</div>
	</section>
@endsection