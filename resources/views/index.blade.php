@extends('base')

@section('content')
    <body class="bg-amber-400 space-y-10 font-default">
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
            <div class="bg-amber-500 py-10 space-y-10 overflow-x-hidden">
                <header class="mx-auto text-center">
                    <h1 class="text-4xl">Pick Up</h1>
                    <h2 class="text-xs">Good Stuff Here</h2>
                </header>
                <div id="pick-up-v-scroller" class="flex gap-10 min-w-fit">
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

            <div class="container mx-auto py-10 space-y-10">
                <header class="mx-auto text-center">
                    <h1 class="text-4xl">The Golden Menu</h1>
                    <h2 class="text-xs">Bet you never seen so many egg dishes in your whole life</h2>
                </header>
                <div id="menu-grid" class="grid grid-cols-3 gap-10">
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Special Eggs</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Savory Eggs</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Small Eggs</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Liquid Eggs</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Sweet Eggs</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Egg Friends</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                    <div class="menu-section flex flex-wrap flex-col items-center space-y-5">
                        <h3 class="text-3xl">Mobile Eggs</h3>
                        <img src="https://placehold.co/400x300" alt="" />
                    </div>
                </div>
                <div id="delivery-banner" class="flex justify-center">
                    <img src="https://placehold.co/900x100" alt="" />
                </div>
            </div>
        </section>
        <section id="news">
            <div class="container mx-auto space-y-10">
                <header class="mx-auto text-center">
                    <h1 class="text-4xl">The Golden News</h1>
                    <h2 class="text-xs">The latest about our eggs</h2>
                </header>
                <ul id="news-listing" class="max-w-3xl mx-auto text-xl py-5 grid [grid-template-columns:auto_auto_1fr] gap-5 justify-center">
                    <li class="news-item contents">
                        <span>tag</span>
                        <time datetime="2024-12-15">2024-12-15</time>
                        <p class="text-justify">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    </li>
                    <li class="news-item contents">
                        <span>tag</span>
                        <time datetime="2024-12-15">2024-12-15</time>
                        <p class="text-justify">Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    </li>
                    <li class="news-item contents">
                        <span>tag</span>
                        <time datetime="2024-12-15">2024-12-15</time>
                        <p class="text-justify">Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    </li>
                    <li class="news-item contents">
                        <span>tag</span>
                        <time datetime="2024-12-15">2024-12-15</time>
                        <p class="text-justify">Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    </li>
                    <li class="news-item contents">
                        <span>tag</span>
                        <time datetime="2024-12-15">2024-12-15</time>
                        <p class="text-justify">Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    </li>
                </ul>
                <div id="read-more" class="flex justify-center">
                    <button class="px-5 py-2 bg-rose-500 text-rose-50 hover:bg-rose-600 hover:scale-110">
                        Read More
                    </button>
                </div>
            </div>
        </section>
        <section id="social">
            <div class="container mx-auto w-fit space-y-10">
                <header class="mx-auto text-center">
                    <h1 class="text-4xl">Social Media</h1>
                    <h2 class="text-xs">More propaganda from us</h2>
                </header>
                <div class="flex gap-5">
                    <img src="https://placehold.co/100x100" alt="" />
                    <img src="https://placehold.co/100x100" alt="" />
                    <img src="https://placehold.co/100x100" alt="" />
                </div>
            </div>
        </section>
        <section id="our-heavenly-golden-orbs">
            <div class="container mx-auto grid grid-cols-12">
                <div class="order-2 col-start-6 col-end-13 space-y-5 text-3xl">
                    <header>
                        <h1 class=" text-6xl text-amber-900 space-y-2">
                            <span class="inline-block">Celebrating <span class="underline decoration-[1rem] underline-offset-1">100 years</span></span>
                            <span class="inline-block pl-10">of high-absorption amino acids</span>
                            <span class="inline-block pl-20">on various carbohydrates</span>
                        </h1>
                    </header>
                    <div class="mx-auto w-2/3">
                        <p>
                            My grandfather started this company with a dozen hens and a dream.
                            Today, we are deeply honored to serve the best egg dishes known to mankind all around the country.
                            Me, my wife, and our daughters are grateful to all of those wonderful people out there that have a
                            taste for the heavenly golden orbs our sweet chickens lay every day!
                        </p>
                        <p class="text-right">- Micah Jonah Killian IV</p>
                    </div>
                </div>
                <div class="order-1 col-start-2 col-end-6">
                    <img src="https://placehold.co/400x400" alt="" />
                </div>
            </div>
        </section>
@endsection
