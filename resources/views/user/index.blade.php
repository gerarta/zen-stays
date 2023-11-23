<x-user title="Profile Detail ">
    <div class="container">
        <h1 class="font-bold text-5xl mb-8"> My Account</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
            <div class=" p-4 text-center  flex items-center justify-center md:justify-end">
                <i class="fa-solid fa-user  font-light rounded-full  " style="font-size: 10rem"></i>
            </div>

            <div>
                <div>
                    <h2 class="font-bold text-2xl mb-4"> My Personal Data </h2>
                    <form action="{{route('user.update', $user ? $user->id : 1)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('POST')
                        
                        <div class="flex gap-4 items-center mb-3 justify-between">
                            <label for="name" class="block font-medium text-md text-gray-700">
                                {{ __('Name') }}
                            </label>

                            <input id="name" name="name" type="text"
                                class="block mt-1 w-1/2 rounded-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ $user ? $user->name : "" }}" required autofocus>
                        </div>
                        <div class="flex gap-4 items-center mb-3 justify-between">
                            <label for="email" class="block font-medium text-md text-gray-700">
                                {{ __('Email') }}
                            </label>

                            <input id="email" name="email" type="email"
                                class="block mt-1 w-1/2 rounded-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ $user ? $user->email : "" }}" required autofocus>
                        </div>

                        <div class="flex gap-4 items-center justify-between mb-3">
                            <label for="gender" class="block font-medium text-md text-gray-700">
                                {{ __('Gender') }}
                            </label>

                            <input id="gender" name="gender" type="text"
                                class="block mt-1 w-1/2 rounded-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ $user ? $user->gender : "" }}" required autofocus>
                        </div>
                        <div class="flex gap-4 items-center justify-between mb-3">
                            <label for="dob" class="block font-medium text-md text-gray-700">
                                {{ __('DOB') }}
                            </label>

                            <input id="dob" name="dob" type="date"
                                class="block mt-1 w-1/2 rounded-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ $user ? $user->address : "" }}" required autofocus>
                        </div>
                        <div class="flex gap-4 items-center justify-between mb-3">
                            <label for="address" class="block font-medium text-md text-gray-700">
                                {{ __('Address') }}
                            </label>

                            <input id="address" name="address" type="text"
                                class="block mt-1 w-1/2 rounded-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ $user ? $user->address : "" }}" required autofocus>
                        </div>

                        <div class="flex gap-4 items-center justify-between mb-3">
                            <label for="phone" class="block font-medium text-md text-gray-700">
                                {{ __('Phone Number') }}
                            </label>

                            <input id="phone" name="phone" type="text"
                                class="block mt-1 w-1/2 rounded-full shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ $user ? $user->phone : "" }}" required autofocus>
                        </div>
                        <button class="bg-gradient-to-r from-[#A1C4FD] to-[#C2E9FB] py-2 w-full tracking-widest font-bold rounded-full"> Edit <i class="fa-solid fa-pen-to-square"></i> </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-user>
