<x-Layout>
    @fragment('admin-nourishment-create-form')
    <div class="container max-w-3xl mx-auto">
        <form id="nourishment-create-form">
            <fieldset class="grid gap-3">
                <legend class="uppercase text-3xl">
                    Add Some Nourishment To The Menu
                </legend>
                <x-input name="name" type="text" label="Name" required />
                <x-input name="image_url" type="file" accept="image/*" label="Image" />
                <x-input name="s_price" type="number" label="Small Price" required />
                <x-input name="m_price" type="number" label="Medium Price" required />
                <x-input name="l_price" type="number" label="Large Price" required />
                <x-input name="g_price" type="number" label="Golden Price" required />
                <x-input name="description" type="text" label="Description" required />
            </fieldset>
            <button name="add" type="submit"
                    hx-post="{{ request()->fullUrl() }}"
                    hx-encoding="multipart/form-data"
                    hx-target="#main">
                Add Nourishment
            </button>
        </form>
    </div>
    @endfragment
</x-Layout>
