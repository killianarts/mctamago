<x-layout>
    @fragment('admin-nourishment-edit-page')
    <div class="container max-w-3xl mx-auto">
        <form id="nourishment-update-form">
            <fieldset class="grid border border-red-500 p-3">
                <legend class="px-2 ml-4 text-3xl">
                    Edit Nourishment
                </legend>
                <div>
                    <label class="grid grid-cols-2">
                        <span>Name</span>
                        <x-input name="name" type="text" value="{{ $nourishment->name }}"/>
                    </label>
                </div>
                <div>
                    <label class="grid grid-cols-2">
                        <span>Small Price</span>
                        <x-input name="s_price" type="number" value="{{ $nourishment->s_price }}" />
                    </label>
                </div>
                <div>
                    <label class="grid grid-cols-2">
                        <span>Medium Price</span>
                        <x-input name="m_price" type="number" value="{{ $nourishment->m_price }}" />
                    </label>
                </div>
                <div>
                    <label class="grid grid-cols-2">
                        <span>Large Price</span>
                        <x-input name="l_price" type="number" value="{{ $nourishment->l_price }}" />
                    </label>
                </div>
                <div>
                    <label class="grid grid-cols-2">
                        <span>Golden Price</span>
                        <x-input name="g_price" type="number" value="{{ $nourishment->g_price }}" />
                    </label>
                </div>
                <div>
                    <label class="grid grid-cols-2">
                        <span>Description</span>
                        <x-input name="description" type="text" value="{{ $nourishment->description }}" />
                    </label>
                </div>
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
