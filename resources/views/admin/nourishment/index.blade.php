<x-Layout>
    <button hx-get="{{ route('admin.nourishment.create') }}" hx-target="#main" hx-push-url="true">
        Create Nourishment
    </button>
    <div class="grid gap-5 [grid-template-columns:auto_1fr_auto_auto_auto_auto] max-w-4xl mx-auto mt-10 bg-amber-200">
        <div id="grid-header">ID</div><div>Name</div><div>S Price</div><div>M Price</div><div>L Price</div><div>G Price</div>
        @foreach ($nourishments as $n)
        <a class="contents"
           hx-get="{{ route('admin.nourishment.update', $n->id) }}"
           hx-target="#main"
           hx-push-url="true"
           hx-replace-url="true"
           href="{{ route('admin.nourishment.update', $n->id) }}">
            <div>{{ $n->id }}</div><div>{{ $n->name }}</div><div>{{ $n->s_price }}</div><div>{{ $n->m_price }}</div><div>{{ $n->l_price }}</div><div>{{ $n->g_price }}</div>
        </a>
        @endforeach
    </div>
</x-Layout>
