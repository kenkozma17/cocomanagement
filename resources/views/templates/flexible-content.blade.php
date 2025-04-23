@extends('layouts.layout')

@section('template_content')
    {{ $title }}

    @foreach ($replicator_field as $set)
        @if ($set['type'] === 'content_bard')
            <section class="bard-content">
                {!! $set['bard_field'] !!}
            </section>
        @endif

        @if ($set['type'] === 'content_code')
            <section class="code-content">
                <pre><code>{{ $set['code_field'] }}</code></pre>
            </section>
        @endif
    @endforeach
@endsection
