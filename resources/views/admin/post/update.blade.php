<x-layout>
    @fragment('admin-post-update-page')
    <div class="container max-w-3xl mx-auto">
        <form id="post-update-form" class="bg-white p-10 rounded-lg">
            <fieldset class="grid gap-2 border border-black border-2 p-3 rounded-lg">
                <legend class="px-4 ml-4 text-3xl">
                    Update Post
                </legend>
                <x-input name="title" type="text" value="{{ $post->title }}" label="Title" required />
                <x-select name="status" label="Status" value="{{ $post->status }}" :options="App\Enums\PostStatusChoices::cases()" required />
                <x-input name="preview_text" type="text" value="{{ $post->preview_text }}" label="Preview Text" required />
                <x-textarea name="body" label="Body" rows="15" wrap="hard" value="{!! $post->body !!}" />
                <!-- <x-input name="body" type="text" value="{!! $post->body !!}" label="Body" required /> -->
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
