@extends('layouts.auth')
@section('title', 'Login')
@section('content')
	<section class="min-h-screen min-w-full flex sm:flex-row flex-col-reverse justify-center items-center bg-gray-100">
		<div class="sm:min-w-[50%] min-w-full sm:min-h-screen min-h-[64vh] px-24 py-4 bg-white shadow-md flex flex-col justify-center items-center overflow-hidden">
			<!-- Logo ZenStays -->
			<div class="flex justify-start mb-4">
				<img src="/assets/images/ThemeLogo.png" alt="Logo" class="w-1/6">
			</div>

			<div class="flex w-full font-medium text-left text-2xl">
				{{ __('Login') }}
			</div>
			<div class="flex w-full text-gray-600 text-sm">
				{{ __('Thank you for letting us recommend you the best boarding houses in your desired area.') }}
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

			<form method="POST" action="{{ route('login') }}" class="flex flex-col w-full">
			@csrf

			<!-- Email Address -->
				<div>
					<label for="email" class="flex font-medium text-sm text-gray-700">
						{{ __('Email') }}
					</label>
					<input id="email" name="email" type="email" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('email') }}" required autofocus>
				</div>

				<!-- Password -->
				<div class="mt-4">
					<label for="password" class="flex font-medium text-sm text-gray-700">
						{{ __('Password') }}
					</label>
					<input id="password" name="password" type="password" class="flex mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autocomplete="current-password">
				</div>

				<!-- Remember Me -->
				<div class="flex mt-4 justify-between">
					<label for="remember_me" class="inline-flex items-center">
						<input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
						<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
					</label>
					{{-- @if (Route::has('password.request'))
						<a class="underline text-sm text-gray-600 hover:text-greenDark" href="{{ route('password.request') }}">
							{{ __('Forgot your password?') }}
						</a>
					@endif --}}
				</div>

				<div class="flex items-start justify-center flex-col mt-4 gap-2">
					<button type="submit" class="w-full flex justify-center text-center items-center px-4 py-2 bg-greenDark border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-greenLight focus:outline-none disabled:opacity-25 transition ease-in-out duration-150">
						{{ __('Log in') }}
					</button>
					<p class="text-sm text-gray-600">Don't have an account yet? <a class="underline hover:text-greenDark" href="{{ route('register') }}">Register yourself!</a></p>
				</div>
			</form>
		</div>
		<div class="sm:min-w-[50%] min-w-full sm:min-h-screen min-h-[36vh] bg-gray-200 shadow-md overflow-hidden splash-login">
		</div>
	</section>
@endsection