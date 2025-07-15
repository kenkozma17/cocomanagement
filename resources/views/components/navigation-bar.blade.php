@props(['context'])
<nav class="main-navigation flex justify-between items-center bg-white w-full md:py-[2rem] py-[1.5rem] md:px-0 px-[1rem] max-w-7xl mx-auto">
    <!-- Company Logo -->
    <a href="/">
        @if (isset($context['brand']->logo))
            <img src="{{ $context['brand']->logo->manipulate(['w' => 80]) }}" alt="{{ $context['brand']->logo->alt }}">
        @else
            <span>Logo here</span>
        @endif
    </a>

    <!-- Navigation -->
    <ul class="gap-x-[2rem] xl:flex hidden">
        <statamic:nav:header>
            <li>
                <a class="cursor-pointer" href="{{ $url }}">{{ $title }}</a>
            </li>
        </statamic:nav:header>
    </ul>

    <!-- Hamburger Menu -->
    @include('partials._hamburger-menu')
</nav>
@include('partials._side-navigation')
