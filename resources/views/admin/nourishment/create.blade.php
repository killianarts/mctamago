<x-Layout>
    @fragment('admin-nourishment-create-form')
    <form id="nourishment-create-form"
          class="max-w-3xl mx-auto"
         >
        <fieldset class="grid gap-3">
            <legend class="uppercase text-3xl">
                Add Some Nourishment To The Menu
            </legend>
            <div>
                <label class="grid grid-cols-2">
                    <span class="relative uppercase after:content[hello] after:absolute after:-top-[20px] after:right-0">Name</span>
                    <x-input name="name" type="text" />
                </label>
            </div>
            <div>
                <label class="grid grid-cols-2">
                    <span>Small Price</span>
                    <x-input name="s_price" type="number" />
                </label>
            </div>
            <div>
                <label class="grid grid-cols-2">
                    <span>Medium Price</span>
                    <x-input name="m_price" type="number" />
                </label>
            </div>
            <div>
                <label class="grid grid-cols-2">
                    <span>Large Price</span>
                    <x-input name="l_price" type="number" />
                </label>
            </div>
            <div>
                <label class="grid grid-cols-2">
                    <span>Golden Price</span>
                    <x-input name="g_price" type="number" />
                </label>
            </div>
            <div>
                <label class="grid grid-cols-2">
                    <span>Description</span>
                    <x-input name="description" type="text" />
                </label>
            </div>
        </fieldset>
        <button name="add" type="submit"
                hx-post="{{ route('admin.nourishment.store') }}"
                hx-target="#main">
            Add Nourishment
        </button>
    </form>
    @endfragment
</x-Layout>
