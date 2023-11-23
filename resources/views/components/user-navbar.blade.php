<nav class="fixed z-50 top-0 w-screen shadow-lg backdrop-blur-sm bg-opacity-70 bg-white responsive-container py-4 px-40">
    <div class="flex justify-between items-center">
        <a href='/' class="cursor-pointer flex">
            <img src="/storage/assets/images/ThemeLogo.png" alt="Logo" class="navbar-logo">
        </a>
        <div class="md:hidden min-h-full">
            <i class="fa-regular fa-bars navbar-toogler text-lg text-primary"></i>
        </div>
        <form class="text-[16px] flex border-2 rounded-full place-items-center" action="{{ route('kost.show-list') }}" method="POST">
            @csrf
            @method('GET')
            <i class="fa-solid fa-magnifying-glass ms-4 me-3"></i>
            <input class="border-transparent rounded-full w-80" type="text" class="rounded-full" name="name" value="{{ request('name') ? request('name') : '' }}" placeholder="Enter Kost Name/Location">
            <button class="btn-green rounded-full " type="submit">Search</button>
        </form>
        <div class="gap-4 text-[16px] flex place-items-center">
            <a href="{{ route('notification.index') }}">
                <button class="btn-navbar font-normal"><i class="fa-solid fa-bell text-greenDark me-2"></i>Notification</button>
            </a>
            <a href="{{ route('kost.wishlist') }}">
                <button class="btn-navbar font-normal"><i class="fa-solid fa-heart text-red-400 me-2"></i>Wishlist</button>
            </a>
            <a href="{{ route('user.index') }}">
                <button class="btn-orange font-normal">{{ auth()->user()?->name ? auth()->user()?->name : 'Joko' }}</button>
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('POST')
                <button class="btn-red font-normal">{{ __('Logout') }}</button>
            </form>
        </div>
    </div>
</nav>
<style>
.navbar-logo{
    width: 50px
}
input:focus,
input:active{
    outline-color: rgba(0,0,0,0);
    border: transparent;
    ring
}
</style>