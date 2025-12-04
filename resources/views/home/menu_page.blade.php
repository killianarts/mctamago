@extends('base')

@section('content')
    <section id="before-menu">
        <div class="grid place-items-center bg-white rounded-lg py-10 mx-10">
            <h1 class="text-7xl">The Golden Menu</h1>
        </div>
    </section>
    <section>
        <div class="grid gap-5 grid-cols-3 p-10">
        @foreach ($nourishments as $n)
            <div class="max-w-sm rounded-lg p-10 bg-white">
                <img src="{{ asset('storage/' . $n->image_url) }}" alt="" />
                <h2 class="text-2xl">{{ $n->name }}</h2>
                <div class="grid grid-cols-2 max-w-[25ch]"><span>Small:</span> <span>￥{{ $n->s_price }}</span></div>
                <div class="grid grid-cols-2 max-w-[25ch]"><span>Medium:</span> <span>￥{{ $n->m_price }}</span></div>
                <div class="grid grid-cols-2 max-w-[25ch]"><span>Large:</span> <span>￥{{ $n->l_price }}</span></div>
                <div class="grid grid-cols-2 max-w-[25ch]"><span>Golden:</span> <span>￥{{ $n->g_price }}</span></div>
            </div>
        @endforeach
        </div>
    </section>
@endsection
