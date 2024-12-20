@fragment('messages')
<div id="messages"
     class="fixed bottom-20 right-20"
     hx-get="/show-messages"
     hx-swap="outerHTML"
     hx-trigger="showMessages from:body"
     hx-target="this">
    @if (session('messages'))
        <div _="on load wait 3s then transition my opacity to 0 over 500ms then remove me">
            {{ session('messages') }}
        </div>
    @endif
</div>
@endfragment
