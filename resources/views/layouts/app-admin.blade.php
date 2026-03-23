<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
@include('partials.admin-head')

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center flex-col">
    @include('components.header.admin-header')
    <main class="lg:hs-overlay-layout-open:ps-60 bg-gray-100 transition-all duration-300 lg:fixed lg:inset-0 pt-13 px-3 pb-3 dark:bg-neutral-900">
        <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Body -->
            <div class="flex-1 flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-0">
                {{ $slot }}
            </div>
            <!-- End Body -->
        </div>
    </main>
    @include('components.footer.admin-footer')
</body>

</html>
