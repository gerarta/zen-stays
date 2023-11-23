<nav class="fixed z-50 top-0 w-screen shadow-lg backdrop-blur-sm bg-opacity-70 bg-white responsive-container py-4 px-40">
    <div class="flex justify-between items-center">
        <div class="cursor-pointer flex">
            <a href="/">
                <img src="/storage/assets/images/ThemeLogo.png" alt="Logo" class="navbar-logo">
            </a>
        </div>
        <div class="md:hidden min-h-full">
            <i class="fa-regular fa-bars navbar-toogler text-lg text-primary"></i>
        </div>
        <form class="text-[16px] flex border-2 rounded-full place-items-center" action="{{route('kost.show-list')}}">
            <i class="fa-solid fa-magnifying-glass ms-4 me-3"></i>
            <input class="border-transparent rounded-full w-80" type="text" class="rounded-full" placeholder="Enter Kost Name/Location" name="name">
            <button class="btn-green rounded-full ">Search</button>
        </form>
        <div class="gap-4 text-[16px] flex">
            <button class="btn-navbar font-normal"><i class="fa-solid fa-heart text-red-400 me-2"></i>Wishlist</button>
            <button class="btn-navbar font-normal"><i class="fa-solid fa-bell text-greenDark me-2"></i>Notifications</button>
            <button class="btn-orange font-normal">{{ auth()->user()?->name ? auth()->user()?->name : 'Joko' }}</button>
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