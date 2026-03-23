<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    @include('partials.public-head')
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex items-center lg:justify-center flex-col">
        @include('components.header.public-header')
        <main class="p-6 lg:p-8 ">{{ $slot }}</main>
        @include('components.footer.public-footer')
    </body>
</html>
