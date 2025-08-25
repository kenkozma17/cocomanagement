@php
$eventDate = null;
if($start_date) {
    $startDate = $start_date;
    $endDate = $end_date;
    $eventDate = $startDate;

    if($endDate) {
        $eventDate = $startDate->format('M d') . ' - ' . $endDate->format('d, Y');
    }
}
@endphp
@extends('layouts.layout')
@section('template_content')
<div class="md:pb-[4.3rem] pb-[2rem] md:pt-[3.75rem] pt-[2rem] bg-secondary-beige">
    <x-layout.wrapper>
        <section class="relative md:h-[430px] h-[330px] md:mb-[2.5rem] mb-[1.875rem]">
            <div class="absolute top-0 right-0 left-0 bottom-0 bg-black/40 z-10"></div>
            <img class="absolute inset-0 w-full object-cover h-full"
                src="/assets/heidi-fin-2tlrezi7bug-unsplash-1.jpg">
            <h1
            class="text-white font-bold break-words z-10 absolute bottom-[1.5rem] right-[2rem] left-[2rem] leading-none uppercase lg:text-[4rem] md:text-[3.25rem] text-[2.5rem]"
            >
            title
            </h1>
        </section>
      <h1 class="text-primary-gray">{{$title}}</h1>

      <div
        class="rounded-md bg-white border-2 border-black md:mt-[1rem] mt-[.75rem] md:p-[2.25rem] p-[1.5rem] grid grid-cols-12 gap-[1rem]"
      >
        <div class="lg:col-span-8 col-span-12 lg:order-first order-last">
          <p class="font-bold md:text-[2rem] text-[1.25rem] mb-[1rem]">
            Event Details
          </p>
          <div class="content">
            {!! $content !!}
            <div class="md:my-[1.25rem] my-[1rem]" v-if="videoUrl">
              <iframe
              class="md:h-[375px] h-[200px]"
                :src="videoUrl"
                frameborder="0"
                width="100%"
              ></iframe>
            </div>
          </div>
        </div>
        <div class="lg:col-span-4 col-span-12 lg:order-last order-first">
          <div class="bg-primary-red border-2 border-black p-[1.375rem]">
            <p class="text-white md:text-[2rem] text-[1.25rem] font-bold">
              {{$eventDate}}
            </p>
            <p
              class="text-white md:text-[1.5rem] text-[1.25rem] md:mt-[1rem] mt-[.75rem] md:mb-[1.25rem] mb-[.95rem]"
            >
              {{ Statamic::modify($start_time)->format('g:ma') }}
              @if($end_time)
                - {{ Statamic::modify($end_time)->format('g:ma') }}
              @endif
            </p>
            <p class="text-white font-bold">
              {{$location}}
            </p>
          </div>
          <a
            target="_blank"
            class="font-bold mt-[1.5rem] inline-block text-blue-700 hover:underline"
            href="https://www.facebook.com/sharer/sharer.php?u=https://viractowncenter.com/events/{{ $slug }}"
            >Share on Facebook</a
          >
        </div>
      </div>
      </x-layout.wrapper>
  </div>
@endsection
