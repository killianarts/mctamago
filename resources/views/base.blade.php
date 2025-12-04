<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
        <script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/hyperscript.org@0.9.13"></script>
        <style type="text/css" media="screen">
         .font-default {
             font-family: Charter, 'Bitstream Charter', 'Sitka Text', Cambria, serif;
             font-weight: 700;
         }
         .font-antique {
             font-family: Superclarendon, 'Bookman Old Style', 'URW Bookman', 'URW Bookman L', 'Georgia Pro', Georgia, serif;
             font-weight: 900;
         }
         .font-hand {
             font-family: 'Segoe Print', 'Bradley Hand', Chilanka, TSCu_Comic, casual, cursive;
             font-weight: normal;
         }
        </style>

        <title>McTamago - Golden Orbs</title>
    </head>
    <body hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}' class="bg-amber-400 space-y-10 font-default">
        <header>
            <nav class="flex flex-1 justify-between items-center bg-white rounded-lg fixed top-5 left-10 right-10 py-3 px-5">
                <div class="max-w-[200px]">
                    <img src="{{ asset('storage/img/mctamago-logo-large.png') }}" alt="" />
                </div>
                <ul class="flex items-center gap-5">
                    <a href="{{ route('home_page') }}"><li>Home</li></a>
                    <a href="{{ route('menu_page') }}"><li>Menu</li></a>
                    <a href="{{ route('about_us_page') }}"><li>About Us</li></a>
                    <a href="{{ route('news_page') }}"><li>News</li></a>
                    <a href="{{ route('mobile_app_page') }}"><li class="text-rose-50 outline outline-2 outline-rose-700 border border-2 border-rose-600 bg-gradient-to-b from-rose-600 to-rose-500 hover:from-rose-700 hover:to-rose-600 px-5 py-1 rounded-sm hover:bg-rose-600">Get the Mobile App</li></a>
                </ul>
            </nav>
        </header>
        <main id="main" class="pt-24">
            @yield('content')
        </main>
    </body>
</html>
