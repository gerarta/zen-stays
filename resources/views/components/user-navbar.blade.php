<nav class="bg-white border-gray-200 shadow-md fixed top-0 backdrop-blur-sm bg-opacity-80 w-full z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="/images/ThemeLogo.png" class="w-[50px]" alt="Flowbite Logo" />
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4  md:p-0 mt-4 border border-gray-200 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 ">
          <li class="flex gap-4 items-center sm:flex-row flex-col">
            <form class="text-[16px] flex border-2 rounded-full place-items-center" action="{{ route('kost.show-list') }}" method="POST">
                @csrf
                @method('GET')
                <i class="fa-solid fa-magnifying-glass ms-4 me-3"></i>
                <input class="border-transparent rounded-full sm:w-80" type="text" class="rounded-full" name="name" value="{{ request('name') ? request('name') : '' }}" placeholder="Enter Kost Name/Location">
                <button class="btn-green rounded-full " type="submit">Search</button>
            </form>
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
          </li>
        </ul>
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