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
        </style>

        <title>McTamago - Golden Orbs</title>
    </head>
    <body hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}' class="bg-amber-400 space-y-10 font-default">
        <main id="main">
            @yield('content')
        </main>
    </body>
</html>
