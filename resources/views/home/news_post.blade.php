@extends('base')

@section('content')
    <section class="container p-10 mx-auto rounded-lg bg-white">
        <div class="prose text-black marker:text-amber-300">
            <h1>{{ $post->title }}</h1>
            <p>Posted: {{ $post->created_at }}</p>
            {!! $post->body !!}
        </div>
    </section>
@endsection
