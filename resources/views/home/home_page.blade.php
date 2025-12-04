@extends('base')

@section('content')
    <div class="bg-amber-400 space-y-10 font-default">
        <section id="hero">
            <div id="hero-slider">
                <div class="container mx-auto w-full h-[500px] bg-amber-300">
                    <div class="h-full grid place-items-center">
                        <p class="text-5xl">Video of eggs being cooked or prepared in various ways.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="pick-up">
            <div class="bg-amber-500 p-10 space-y-10 overflow-x-hidden">
                <header class="mx-auto text-center">
                    <h1 class="text-7xl text-amber-900 font-antique">Pick Up</h1>
                    <h2 class="text-xs text-amber-700">Good Stuff Here</h2>
                </header>
                <div id="pick-up-v-scroller" class="flex gap-10 min-w-fit">
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="{{ asset('storage/img/mobile-app.png') }}" alt="" />
                        </div>
                        <p>Mobile App</p>
                    </div>
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="https://placehold.co/400x300" alt="" />
                        </div>
                        <p>Easter Egg Omelette</p>
                    </div>
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="{{ asset('storage/img/everlasting-eggnog.png') }}" alt="" />
                        </div>
                        <p>Everlasting Eggnog</p>
                    </div>
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="https://placehold.co/400x300" alt="" />
                        </div>
                        <p>Text Text Text Text Text Text Text Text Text Text Text Text </p>
                    </div>
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="https://placehold.co/400x300" alt="" />
                        </div>
                        <p>Text Text Text Text Text Text Text Text Text Text Text Text </p>
                    </div>
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="https://placehold.co/400x300" alt="" />
                        </div>
                        <p>Text Text Text Text Text Text Text Text Text Text Text Text </p>
                    </div>
                    <div class="v-scroller-item min-w-[400px] space-y-5 text-3xl">
                        <div>
                            <img src="https://placehold.co/400x300" alt="" />
                        </div>
                        <p>Text Text Text Text Text Text Text Text Text Text Text Text </p>
                    </div>
                    <!-- Mobile App -->
                    <!-- The Golden Set -->
                    <!-- Campaign: World Eggs -->
                </div>
            </div>
        </section>
        <section id="menu">
            <div class="container mx-auto p-10 space-y-10">
                <header class="mx-auto text-center">
                    <h1 class="text-7xl text-amber-900 font-antique">The Golden Menu</h1>
                    <h2 class="text-xs text-amber-700">Bet you never seen so many egg dishes in your whole life</h2>
                </header>
                <div id="menu-grid" class="grid grid-cols-2 gap-10">
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Food</h3>
                        <img src="{{ asset('storage/images/nourishment/17350956451871674470580269056.jpeg') }}" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Drinks</h3>
                        <img src="{{ asset('storage/images/nourishment/17350976131871738437101113344.jpeg') }}" alt="" />
                    </div>
                </div>
                <div id="delivery-banner" class="flex justify-center">
                    <img src="https://placehold.co/900x100" alt="" />
                </div>
            </div>
        </section>
        <section id="news" class="bg-amber-500">
            <div class="container mx-auto space-y-10 p-10">
                <header class="mx-auto text-center">
                    <h1 class="text-7xl text-amber-900 font-antique">The Golden News</h1>
                    <h2 class="text-xs text-amber-700">The latest about our eggs</h2>
                </header>
                <div class="bg-white rounded-lg p-10">
                    <ul id="news-listing" class="max-w-3xl mx-auto text-xl grid [grid-template-columns:auto_auto_1fr] gap-5 justify-center">
                        @foreach ($posts as $post)
                            <a class="contents" href="{{ route('news_post', $post->id) }}">
                                <li class="contents">
                                    <time datetime="{{ date_format($post->created_at, 'c') }}">{{ date_format($post->created_at, 'Y-m-d') }}</time>
                                    <p>{{ $post->title }}</p>
                                    <p class="text-">{{ $post->preview_text }}</p>
                                </li>
                            </a>
                        @endforeach
                    </ul>
                    <div id="read-more" class="flex justify-center mt-10">
                        <button class="text-rose-50 outline outline-2 outline-rose-700 border border-2 border-rose-600 bg-gradient-to-b from-rose-600 to-rose-500 hover:from-rose-700 hover:to-rose-600 px-5 py-1 rounded-sm hover:bg-rose-600">
                            Read More
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="social">
            <div class="w-full p-10 space-y-10 bg-amber-200">
                <header class="mx-auto text-center">
                    <h1 class="text-4xl text-amber-900 font-antique">Social Media</h1>
                    <h2 class="text-xs text-amber-700">More propaganda from us</h2>
                </header>
                <div class="flex justify-center gap-5">
                    <img src="https://placehold.co/100x100" alt="" />
                    <img src="https://placehold.co/100x100" alt="" />
                    <img src="https://placehold.co/100x100" alt="" />
                </div>
            </div>
        </section>
        <section id="our-heavenly-golden-orbs">
            <div class="container mx-auto grid p-10 grid-cols-12">
                <div class="order-2 col-start-6 col-end-13 space-y-5 text-3xl">
                    <header>
                        <h1 class=" text-6xl text-amber-900 font-hand">
                            Celebrating 100 years
                            of high-absorption amino acids
                            on various carbohydrates
                        </h1>
                    </header>
                    <div class="mx-auto">
                        <p class="font-thin text-amber-950">
                            My grandfather started this company with a dozen hens and a dream.
                            Today, we are deeply honored to serve the best egg dishes known to mankind all around the country.
                            Me, my wife, and our daughters are grateful to all of those wonderful people out there that have a
                            taste for the heavenly golden orbs our sweet chickens lay every day!
                        </p>
                    </div>
                    <p class="text-right">- Micah Jonah Killian IV</p>
                </div>
                <div class="order-1 col-start-2 col-end-6">
                    <img src="https://placehold.co/400x400" alt="" />
                </div>
            </div>
        </section>
@endsection
