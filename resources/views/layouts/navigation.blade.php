<nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <div class="flex items-center">
        <a href="/" class="font-bold text-2xl">
            ✅ Habit Track
        </a>
    </div>
    <div class="font-montserrat hidden md:block">
    @auth
        <!-- Logout -->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="py-2 px-4 text-white bg-black rounded-3xl font-bold">
                Log out
            </a>
            <form action="{{ route('logout') }}" method="POST" class="hidden" id="logout-form">
                @csrf
            </form>
        @endauth
    </div>
    <div id="showMenu" class="md:hidden">
        <img src="{{ asset('images/logos/Menu.svg') }}" alt="Menu icon"/>
    </div>
</nav>
<div id="mobileNav" class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
        <img src="{{ asset('images/logos/Cross.svg') }}" alt="" class="h-16 w-16"/>
    </div>
    <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
        @auth
            <li>
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>
        @else
            <li class="my-6">
                <a href="{{ route('login') }}">
                    Log back in</a>
            </li>
            <li class="my-6">
                <a href="{{ route('register') }}">
                    Get started</a>
            </li>
        @endif
    </ul>
</div>
