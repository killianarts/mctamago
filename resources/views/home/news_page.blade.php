@extends('base')

@section('content')
    <section id="before-news-list" class="mb-10">
        <div class="mx-10 bg-white rounded-lg p-10">
            <h1 class="text-7xl text-center">News</h1>
        </div>
    </section>
    <section id="news-list">
        <div class="mx-10 bg-white rounded-lg p-10">
            <ul id="news-listing" class="grid grid-cols-3">
                @foreach ($posts as $post)
                    <a href="{{ route('news_post', $post->id) }}" class="contents">
                        <li>
                            <div class="flex flex-wrap">
                                <time class="text-black/30 text-xs" datetime="{{ date_format($post->created_at, 'c') }}">{{ date_format($post->created_at, 'Y-m-d') }}</time>
                                <h2 class="pb-1 text-2xl text-balance">{{ $post->title }}</h2>
                                <p class="pb-5 text-black/80">{{ $post->preview_text }}</p>
                                <button class="text-rose-50 outline outline-2 outline-rose-700 border border-2 border-rose-600 bg-gradient-to-b from-rose-600 to-rose-500 hover:from-rose-700 hover:to-rose-600 px-3 py-1 rounded-md hover:bg-rose-600">
                                    Read More
                                </button>
                            </div>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
