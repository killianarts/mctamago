<x-layout>
    @fragment('admin-nourishment-edit-page')
    <div class="container max-w-3xl mx-auto">
        <form id="nourishment-update-form">
            <fieldset class="grid border border-red-500 p-3">
                <legend class="px-2 ml-4 text-3xl">
                    Edit Nourishment
                </legend>
                <img src="{{ Storage::url($nourishment->image_url) }}" alt="" />
                <x-input name="name" type="text" value="{{ $nourishment->name }}" label="NAME" required />
                <x-input name="image_url" type="file" value="{{ $nourishment->image_url }}" accept="image/*" label="Image" />
                <x-input name="s_price" type="number" value="{{ $nourishment->s_price }}" label="Small Price" required />
                <x-input name="m_price" type="number" value="{{ $nourishment->m_price }}" label="Medium Price" required />
                <x-input name="l_price" type="number" value="{{ $nourishment->l_price }}" label="Large Price" required />
                <x-input name="g_price" type="number" value="{{ $nourishment->g_price }}" label="Golden Price" required />
                <x-input name="description" type="text" value="{{ $nourishment->description }}" label="Description" required />
            </fieldset>
            <button hx-patch="{{ route('admin.nourishment.update', compact('nourishment')) }}"
                    hx-encoding="multipart/form-data"
                    hx-target="#nourishment-update-form"
                    name="update" type="submit">
                Update Nourishment
            </button>
            <button hx-delete="{{ route('admin.nourishment.destroy', compact('nourishment')) }}"
                    hx-target="#main"
                    name="delete" type="submit">
                Delete
            </button>
        </form>
    </div>
    @endfragment


</x-layout>
