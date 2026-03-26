<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
<div class="min-h-screen bg-[#060606] font-sans text-gray-300">

    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-lime-500/[0.07] blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[10%] right-[0%] w-[30%] h-[30%] bg-lime-500/[0.05] blur-[100px] rounded-full"></div>
    </div>


    <main class="relative z-10 mx-auto max-w-5xl px-6 py-20 lg:py-32">
        
        <section class="mb-24 text-center">
            <h1 class="mb-8 text-5xl font-black tracking-tight text-white lg:text-7xl">
                3A Care<span class="text-lime-700">Tering</span>
            </h1>
            <p class="mx-auto max-w-2xl text-lg leading-relaxed text-gray-400">
                Experience the art of seamless event planning. 
                Our catering service is designed to bring <span class="text-white font-medium">perfection to your plate</span>, whether it's an intimate wedding, a corporate gala, or a casual weekend gathering.
            </p>
        </section>

        <div class="space-y-12">
            
    <!-- Features -->
    <div class="group relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-8 shadow-2xl transition-all hover:border-lime-500/30 md:p-12">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-lime-900 tracking-tight">Features</h2>
            <div class="h-[1px] flex-grow mx-8 bg-gradient-to-r from-lime-500/50 to-transparent"></div>
        </div>
        
        <div class="grid gap-8 sm:grid-cols-2">
            <div class="flex items-start gap-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-lime-500/10 text-2xl">📅</div>
                <div>
                    <h4 class="text-black font-semibold">Smart Scheduling</h4>
                    <p class="text-sm text-black mt-1">Book events and coordinate deliveries with pinpoint accuracy.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-lime-500/10 text-2xl">🍽️</div>
                <div>
                    <h4 class="text-black font-semibold">Custom Packages</h4>
                    <p class="text-sm text-black mt-1">Tailor your menu to fit your theme and dietary needs.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-lime-500/10 text-2xl">📊</div>
                <div>
                    <h4 class="text-black font-semibold">Order Tracking</h4>
                    <p class="text-sm text-black mt-1">Live updates on your catering status from kitchen to table.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-lime-500/10 text-2xl">🤝</div>
                <div>
                    <h4 class="text-black font-semibold">Direct Concierge</h4>
                    <p class="text-sm text-black mt-1">Dedicated support for your most complex special requests.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="group relative overflow-hidden rounded-3xl border border-gray-200 bg-white p-8 shadow-2xl transition-all hover:border-lime-500/30 md:p-12">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold text-lime-900 tracking-tight">Why Choose Us?</h2>
            <div class="h-[1px] flex-grow mx-8 bg-gradient-to-r from-lime-500/50 to-transparent"></div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <div class="space-y-4 text-lg leading-relaxed text-black">
                <p>
                    At <span class="text-black font-bold tracking-tight">3A Care<span class="text-lime-700">Tering</span></span>, we believe that great food is the foundation of any successful event. We reduce the stress of planning by providing a digital-first approach to traditional service.
                </p>
            </div>
            <div class="space-y-4 text-lg leading-relaxed text-black">
                <p>
                    Our platform combines <span class="text-lime-500 italic font-medium">reliability and flexibility</span>, ensuring that your guests enjoy a premium dining experience exactly as you envisioned it.
                </p>
            </div>
        </div>
    </div>

</div>

    </main>
</div>

</div>