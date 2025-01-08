<x-Layout>
    <button hx-get="{{ route('admin.post.create') }}" hx-target="#main" hx-push-url="true">
        Create Post
    </button>
    <div class="grid gap-5 [grid-template-columns:auto_1fr_auto_auto] max-w-4xl mx-auto mt-10 bg-amber-200">
        <div id="grid-header">ID</div><div>Created At</div><div>Title</div><div>Status</div>
        @foreach ($posts as $n)
        <a class="contents"
           hx-get="{{ route('admin.post.update', $n->id) }}"
           hx-target="#main"
           hx-push-url="true"
           hx-replace-url="true"
           href="{{ route('admin.post.update', $n->id) }}">
            <div>{{ $n->id }}</div><div>{{ $n->created_at }}</div><div>{{ $n->title }}</div><div>{{ $n->status->name }}</div>
        </a>
        @endforeach
    </div>
</x-Layout>
