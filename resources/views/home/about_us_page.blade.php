@extends('base')

@section('content')
    <section id="about-us-hero">
        <div class="grid place-items-center bg-white rounded-lg py-10 mx-10">
            <h1 class="text-7xl">About Us</h1>
        </div>
    </section>
    <section id="about-us">
        <div class="bg-white rounded-lg p-10 mx-10 mt-10">
            This is a demo site created by me, Micah Killian.

            <h2 class="text-3xl mb-4"><span class="text-black/30 mr-4 tracking-wide">▒▒</span>DATA SHEET</h2>
            <x-fieldset legend="Concept">Restaurant</x-fieldset>
            <div class="grid grid-cols-3 gap-3">
                <x-fieldset legend="Project Start">2024-12-10</x-fieldset>
                <x-fieldset legend="Deadline">2025-01-17</x-fieldset>
                <x-fieldset legend="Completed"></x-fieldset>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <x-fieldset legend="Estimated Work Hours">405</x-fieldset>
                <x-fieldset legend="Price Estimate">$25/h, ~$10,000 total</x-fieldset>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <x-fieldset legend="Tech Stack">
                    <ul>
                        <li>PHP/Laravel</li>
                        <li>Sqlite</li>
                        <li>HTMX</li>
                        <li>Tailwind</li>
                        <li>Hyperview (mobile app)</li>
                    </ul>
                </x-fieldset>
                <x-fieldset legend="Key Feature Requirements">
                    <ul>
                        <li>Basic CRUD capabilities</li>
                        <li>Basic ecommerce capabilities (mobile app)</li>
                        <li>Hypermedia-driven development</li>
                        <li>Basic custom design</li>
                    </ul>
                </x-fieldset>
            </div>
            <div class="mt-5">
                <h2 class="text-3xl uppercase mb-3
                           before:content-['▒'] before:mr-2 before:text-black/30">Goals</h2>
                <div class="indent-5 mb-5">
                    <p class="font-default font-thin">I had the following goals for this project:</p>
                </div>
                <h3 class="text-xl uppercase mb-2"><span class="text-black/30">░</span> Demonstrate Technical Versatility</h3>
                <div class="indent-5 mb-5">
                    <p class="font-default font-thin">Before beginning this project, I had never worked with PHP or Laravel and I had never created a mobile app using Hyperview or any other tool or language.</p>
                    <p class="font-default font-thin">By completing a landing page, CRUD backend, and an ecommerce front end for a mobile app using technology I had never worked with before, I intend to demonstrate my willingness and ability to take on complex tasks using technology that I have never worked with before.</p>
                </div>
                <h3 class="text-xl uppercase mb-2"><span class="text-black/30">░</span> DEMONSTRATE PROFESSIONALISM</h3>
                <div class="indent-5 mb-5">
                    <p class="font-default font-thin">When customers pay Webmasters like me large sums of money to get work done, they want to know that they will get exactly what they want by a certain set date. Webmasters want to get paid on time, and customers want to get their products on time and at the specifications agreed to during negotiations. No uncertainty, no worries, no problems. Customers want to negotiate project specifications, time and price budgets, and then get their product on time without drama.</p>
                    <p class="font-default font-thin">To meet the high level of service that customers rightly deserve, I need to demonstrate a high degree of professionalism.</p>
                    <p class="font-default font-thin">Before beginning this project, I had never created time or price estimates at this level of detail. In my freelance work, I have typically taken on large tasks without a clear vision of the end requirements nor an estimate for time or cost. I have received general requirements and then implemented them at the highest quality I could without regard for time spent implementing.</p>
                    <p class="font-default font-thin">I had also not taken detailed records of time spent working. I worked hard and when the product/feature was done, it was done, and the customer made the payment that we agreed to, no matter how long it took.</p>
                    <p class="font-default font-thin">With this project, I want to demonstrate my ability to take on a large task, make time and price estimates, and make and meet quality/feature level goals on time and within the estimated budget.</p>
                </div>
                <h3>Reflection:</h3>
            </div>
        </div>
    </section>
@endsection
