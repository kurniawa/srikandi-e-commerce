<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <nav class="bg-linear-to-tr from-amber-200 to-amber-500 no-print py-2">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex gap-1 items-center justify-between">
                    <div class="w-9">
                        <a href="/">
                            <img src="/images/icons/icon-96x96.png" alt="" srcset="" class="size-8 rounded-full overflow-hidden">
                        </a>
                    </div>

                    <!-- PENCARIAN ITEM -->
                    <form action="/" method="GET" class="flex-auto">
                        <div class="flex gap-1 items-center bg-white text-xs text-slate-400 rounded-lg border-slate-300 border-2 pl-1">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </div>
                            <div class="grow">
                                <input type="text" name="longname" id="search-longname" oninput="searchItem(this, 'search-result')" class="border-none w-full p-1 rounded" placeholder="nama barang/item...">
                            </div>
                        </div>
                    </form>
                    <!-- END - PENCARIAN ITEM -->

                    <div class="flex gap-2 items-center">
                        <livewire:shopping_cart />
                        <livewire:user_dropdown />
                    </div>
                </div>
            </div>
        </nav>

        {{ $slot }}

        @livewireScripts
    </body>
</html>
