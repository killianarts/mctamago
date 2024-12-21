<x-layout>
    @fragment('admin-nourishment-edit-page')
    <div class="container max-w-3xl mx-auto">
        <form id="nourishment-update-form">
            <fieldset class="grid border border-red-500 p-3">
                <legend class="px-2 ml-4 text-3xl">
                    Edit Nourishment
                </legend>
                <x-input name="name" type="text" value="{{ $nourishment->name }}" label="NAME" />
                <x-input name="s_price" type="number" value="{{ $nourishment->s_price }}" label="Small Price" />
                <x-input name="m_price" type="number" value="{{ $nourishment->m_price }}" label="Medium Price" />
                <x-input name="l_price" type="number" value="{{ $nourishment->l_price }}" label="Large Price" />
                <x-input name="g_price" type="number" value="{{ $nourishment->g_price }}" label="Golden Price" />
                <x-input name="description" type="text" value="{{ $nourishment->description }}" label="Description" />
            </fieldset>
            <button hx-put="{{ route('admin.nourishment.update', ['nourishment' => $nourishment->id]) }}"
                    hx-target="#nourishment-update-form"
                    name="update" type="submit">
                Update Nourishment
            </button>
            <button hx-delete="{{ route('admin.nourishment.destroy', ['nourishment' => $nourishment->id]) }}"
                    hx-target="#main"
                    name="delete" type="submit">
                Delete
            </button>
        </form>
    </div>
    @endfragment


</x-layout>
