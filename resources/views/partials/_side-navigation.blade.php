<nav class="mobile-navigation xl:hidden fixed top-0 bottom-0 right-0 hidden w-full bg-white p-[1.5rem] h-screen">
    <button class="mobile-navigation-close absolute right-[2rem] top-[2rem] cursor-pointer">
        @include('icons.close')
    </button>
    <ul class="flex flex-col gap-[1rem] justify-center items-center h-full">
        <statamic:nav:header>
            <li>
                <a class="cursor-pointer text-xl" href="{{ $url }}">{{ $title }}</a>
            </li>
        </statamic:nav:header>
    </ul>
</nav>
