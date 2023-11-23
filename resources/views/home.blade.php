<x-guest title="Home">
    <section id="landing-page" class="mx-auto mt-[5.2rem]">
        <div class="w-full m-0 bg-[url('/images/landing-item.png')] md:h-[900px] sm:h-screen  bg-cover bg-center   ">
            <div class="flex justify-end">
                <div class=" flex items-end   ">
                    <div class="w-1/2">
                        <img src="/images/logo.png" class="w-full " alt="">
                    </div>
                    <h1 class="md:text-8xl text-5xl font-bold align-bottom">
                        <span class="text-[#FFD9B7]">Zen</span>
                        <span class="text-[#9ED2BE]">Stays</span>
                    </h1>
                </div>
            </div>

            <div class="text-end mt-4 me-2">
                <blockquote class="text-white font-thin text-4xl italic sm:text-2xl">
                    "Where Every <span class="font-bold text-[#9ED2BE]">Stays</span> Fells like a Homecoming"
                </blockquote>
            </div>
            <form class="flex justify-end w-auto me-2 mt-4" action="{{ route('kost.show-list') }}" method="POST">
                @csrf
                @method('GET')
                <div class="flex rounded-full shadow-sm border  p-0.5">
                    <input type="text"
                        class="py-2 px-3 pe-11 block w-[300px] border-gray-200 shadow-sm rounded-s-full text-sm focus:z-10 focus:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none 
                        tracking-wider"
                        placeholder="Enter Kost Name/Location"
                        name="name"
                        >
                    <button type="submit"
                        class="px-4 inline-flex items-center min-w-fit rounded-e-full border border-e-0 border-gray-200 bg-green-200 text-sm text-gray-500  tracking-widest">SEARCH
                    </button>
                </div>
            </form>
            <div class="text-end me-2 mt-4 p-1">
                {{-- <h3 class="text-white text-5xl mb-4 font-bold"> Or </h3> --}}
                {{-- <button class="bg-[#7EAA92] text-white rounded-full tracking-widest uppercase p-3 hover:bg-green-800">
                    Register as a tenant
                </button> --}}
            </div>
        </div>
    </section>

    <section id="about-zen-stay">
        <div class="  md:-mt-40  mx-auto p-4">
            <div class="grid md:grid-cols-2">
                <div>
                    <h1 class="text-5xl font-bold mb-4">
                        <span class="font-extrabold"> About</span>
                        <span class="text-[#FFD9B7]">Zen</span>
                        <span class="text-[#9ED2BE]">Stays</span>
                    </h1>
                    <p class="tracking-wider ">
                        ZenStays is your go-to platform for discovering and booking the perfect <span
                            class="font-bold">kost</span> tailored to your
                        needs.
                        Our website provides comprehensive information, including details about the surrounding area,
                        strategic location advantages, a 360-degree view of rooms, and insights into the neighborhood.
                        Experience the ease of finding the ideal accommodation or boarding house with ZenStays, where
                        every
                        detail matters. Your next comfortable and strategically located living space is just a click
                        away!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section id="why-zen-stay">
        <div class=" mx-auto mt-6">
            <div class="grid md:grid-cols-2">
                <div class="md:block hidden">
                    <img src="images/Vector.png" alt="">
                </div>
                <div class=" text-center">
                    <h1 class="text-5xl font-bold mb-4">
                        <span class="font-extrabold"> Why</span>
                        <span class="text-[#FFD9B7]">Zen</span>
                        <span class="text-[#9ED2BE]">Stays</span>
                    </h1>
                    <div class="grid gap-2 grid-cols-5 ">
                        <div>
                            <div class="rounded-full bg-gradient-to-b from-[#B6E2B3] to-[#A4D4BC] p-3">
                                <img src="/images/cod.png" alt="" class="object-cover object-center">
                            </div>
                            <p class="text-light tracking-wider"> Safe Payment</p>
                        </div>
                        <div>
                            <div class="rounded-full bg-gradient-to-b from-[#B6E2B3] to-[#A4D4BC] p-3">
                                <img src="/images/investment-time.png" alt=""
                                    class="object-cover object-center">
                            </div>
                            <p class="text-light tracking-wider"> Time Efficiency</p>
                        </div>
                        <div>
                            <div class="rounded-full bg-gradient-to-b from-[#B6E2B3] to-[#A4D4BC] p-3">
                                <img src="/images/Information-Location.png" alt=""
                                    class="object-cover 
                                block mx-auto object-center">
                            </div>
                            <p class="text-light tracking-wider"> Comprehensive Information </p>
                        </div>
                        <div>
                            <div class="rounded-full bg-gradient-to-b from-[#B6E2B3] to-[#A4D4BC] p-3">
                                <img src="/images/settings.png" alt="" class="object-cover object-center">
                            </div>
                            <p class="text-light tracking-wider"> Personal Search</p>
                        </div>
                        <div>
                            <div class="rounded-full bg-gradient-to-b from-[#B6E2B3] to-[#A4D4BC] p-3">
                                <img src="/images/360-view.png" alt="" class="object-cover object-center">
                            </div>
                            <p class="text-light tracking-wider"> 360 <sup>o</sup> Virtual View</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefit-zen-stay">
        <div class=" mt-6">
            <div class="grid md:grid-cols-2">
                <div class="ms-4  tracking-wider">
                    <h1 class="text-5xl font-bold mb-4">
                        <span class="font-extrabold"> Benefit of Using</span>
                        <span class="text-[#FFD9B7]">Zen</span>
                        <span class="text-[#9ED2BE]">Stays</span>
                    </h1>
                    <ol class="indent-1 list-decimal ms-8">
                        <li>Virtual Tour In-Depth Exploration</li>
                        <li>Comprehensive Search Features</li>
                        <li>
                            Detailed Filters for Personalization
                        </li>
                        <li>
                            Direct Communication with Owners

                        </li>
                        <li>
                            Seamless Rental Application
                        </li>
                        <li>
                            Secure and Convenient Payments
                        </li>
                        <li>
                            Transparent and Convenient <span class="font-bold">
                                kost</span> Reviews Writing
                        </li>

                        <li>
                            Save Favorites for Future Reference
                        </li>
                        <li>
                            Promotions and Savings
                        </li>
                        <li>
                            User-Friendly Platform
                        </li>

                    </ol>
                    <p class="mt-4">
                        With ZenStays, finding and securing your ideal kost is not just easy but also enriched with
                        features designed to enhance your overall living experience.

                    </p>
                </div>
                <div class="-mt-48 md:block hidden">
                    <img src="images/Vector-1.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="send-us-message">
        <div class="mt-5 mx-auto">
            <div class="grid grid-cols-2 gap-4">
                <form action="" class="translate-x-10">
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="First Name"
                            class=" p-1 outline outline-2 
                        outline-black placeholder:tracking-widest">
                        <input type="text" placeholder="Last Name"
                            class=" p-1 outline outline-2 
                        outline-black placeholder:tracking-widest">
                    </div>
                    <input type="text" placeholder="Subject"
                        class=" p-1 outline outline-2 
                        outline-black placeholder:tracking-widest mt-4 w-full">

                    <textarea name="" id="" cols="30" rows="10"
                        class=" p-1 outline outline-2 
                    outline-black placeholder:tracking-widest mt-4 w-full text-slate-500"> Message</textarea>
                </form>

                <div class="md:text-end text-start -translate-x-10">
                    <h2 class="text-4xl font-extrabold mb-4"> Send Us A Message</h2>
                    <div class=" w-full md:w-3/4 float-right">
                        <p class="font-medium text-xl mb-5">
                            We will read all emails. Send us any message you want and We'll get back to you.
                        </p>
                        <small>
                            We need your <span class="font-bold">Name</span> and
                            <span class="font-bold">
                                Email Address
                            </span>, but you won't receive anything other than your reply.

                        </small>
                    </div>
                </div>
            </div>

        </div>

    </section>
</x-guest>
