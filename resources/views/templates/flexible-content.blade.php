@extends('layouts.layout')

@section('template_content')
    <section class="bard-content mx-auto max-w-7xl">
        {{ $title }}
    </section>

    @if (isset($replicator_field))
        @foreach ($replicator_field as $set)
            @if ($set['type'] === 'content_bard')
                <section class="bard-content mx-auto max-w-7xl">
                    {!! $set['bard_field'] !!}
                </section>
            @endif

            @if ($set['type'] === 'content_code')
                <section class="code-content mx-auto max-w-7xl">
                    <pre><code>{{ $set['code_field'] }}</code></pre>
                </section>
            @endif
        @endforeach
    @endif
@endsection
