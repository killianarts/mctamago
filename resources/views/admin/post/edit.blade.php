<x-layout>
    @fragment('admin-post-edit-page')
    <div class="container max-w-3xl mx-auto">
        <form id="post-update-form">
            <fieldset class="grid border border-red-500 p-3">
                <legend class="px-2 ml-4 text-3xl">
                    Edit Post
                </legend>
                <x-input name="title" type="text" value="{{ $post->name }}" label="NAME" required />
                <x-select name="status" label="Status" value="{{ $post->status }}" :options="['public', 'private', 'archived', 'draft']"  />
                <x-input name="preview_text" type="text" value="{{ $post->preview_text }}" label="Preview Text" required />
                <x-input name="body" type="text" value="{{ $post->body }}" label="Body" required />
            </fieldset>
            <button hx-post="{{ request()->fullUrl() }}"
                    hx-target="#main"
                    name="update" type="submit">
                Update Post
            </button>
            <button hx-post="{{ request()->fullUrl() }}"
                    hx-target="#main"
                    name="delete" type="submit">
                Delete
            </button>
        </form>
    </div>
    @endfragment
</x-layout>
