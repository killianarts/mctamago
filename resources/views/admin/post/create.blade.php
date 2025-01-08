<x-Layout>
    @fragment('admin-post-create-form')
    <div class="container max-w-3xl mx-auto">
        <form id="post-create-form">
            <fieldset class="grid gap-3">
                <legend class="uppercase text-3xl">
                    Add Post
                </legend>
                <x-input name="title" type="text" label="Title" required />
                <x-select name="status" label="Status" :options="App\Models\PostStatusChoices::cases()" required />
                <x-input name="preview_text" type="text" label="Preview Text" required />
                <x-input name="body" type="text" label="Body" required />
            </fieldset>
            <button name="add" type="submit"
                    hx-post="{{ request()->fullUrl() }}"
                    hx-target="#main">
                Add Post
            </button>
        </form>
    </div>
    @endfragment
</x-Layout>
