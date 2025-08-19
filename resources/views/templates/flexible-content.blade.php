@extends('layouts.layout')

@section('template_content')
    <!-- <section class="bard-content mx-auto max-w-7xl">
        {{ $title }}
    </section> -->

    @if (isset($replicator_field))
        @foreach ($replicator_field as $set)
            @if ($set['type'] === 'banner')
                <x-layout.wrapper>
                    @include('components.flex.banner')
                </x-layout.wrapper>
            @endif

            @if ($set['type'] === 'upcoming_events')
                <x-layout.wrapper>
                    @include('components.flex.upcoming-events')
                </x-layout.wrapper>
            @endif
        @endforeach
    @endif
@endsection
