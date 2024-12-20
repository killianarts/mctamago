<x-Layout>
    <div class="grid max-w-4xl mx-auto">
        @foreach ($nourishments as $n)
        <a class="grid [grid-template-columns:auto_1fr_auto_auto_auto_auto] gap-5" hx-get="{{ route('admin.nourishment.edit', $n->id) }}"
           hx-target="#main"
           hx-push-url="true"
           hx-replace-url="true"
           href="{{ route('admin.nourishment.show', $n->id) }}">
            <div>{{ $n->id }}</div><div>{{ $n->name }}</div><div>{{ $n->s_price }}</div><div>{{ $n->m_price }}</div><div>{{ $n->l_price }}</div><div>{{ $n->g_price }}</div>
        </a>
        @endforeach
    </div>
</x-Layout>
