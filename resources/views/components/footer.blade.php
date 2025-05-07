@props(['context'])
<footer class="max-w-7xl mx-auto bg-white w-full md:py-[2rem] py-[1.5rem] md:px-0 px-[1rem]">
    <!-- Company Logo -->
     <div class="flex md:flex-row flex-col md:justify-between justify-center items-center gap-[2rem]">
        <div>
            <a href="/">
                <img class="md:mb-[1.5rem] mb-[1rem]" src="{{ $context['brand']->logo->manipulate(['w' => 80]) }}" alt="{{ $context['brand']->logo->alt }}">
            </a>
            <!-- Primary Links -->
            @if ($context['footer']->primary_links)
                <div class="flex flex-col gap-[.25rem]">
                    @foreach ($context['footer']->primary_links as $link)
                        <ul>
                            <li>
                                <a href="{{ $link['url'] }}">
                                    {{ $link['text'] }}
                                </a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Footer Links -->
         @if ($context['footer']->footer_sections)
            <div class="flex md:flex-row flex-col gap-[2rem]">
                @foreach ($context['footer']->footer_sections as $sectionGroup)
                    @if ($sectionGroup['type'] === 'footer_section')
                        <div>
                            <p class="md:mb-[.75rem] mb-[.5rem] font-bold text-lg">{{ $sectionGroup['title'] }}</p>
                            @if (!empty($sectionGroup['links']))
                                <ul>
                                    @foreach ($sectionGroup['links'] as $linkGroup)
                                        @if ($linkGroup['type'] === 'link')
                                            <li>
                                                <a href="{{ $linkGroup['url'] }}">
                                                    {{ $linkGroup['link_text'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</footer>
