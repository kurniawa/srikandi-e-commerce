<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div x-data="{ open: false }" class="relative">
    {{-- Trigger --}}
    <button
        @click="open = !open"
        @click.outside="open = false"
        class="flex items-center rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
        aria-haspopup="true"
        aria-expanded="false"
    >
        @auth
            @if ($user->profile_picture)
                <img
                    class="h-8 w-8 rounded-full"
                    src="{{ asset('storage/' . $user->profile_picture) }}"
                    alt="Profile Picture"
                >
            @elseif ($user->profile_picture_path)
                <img
                    class="h-8 w-8 rounded-full"
                    src="{{ asset('storage/' . $user->profile_picture_path) }}"
                    alt="Profile Picture"
                >
            @else
                {{-- fallback icon --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="h-8 w-8 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0
                             3.75 3.75 0 0 1 7.5 0ZM4.501
                             20.118a7.5 7.5 0 0 1
                             14.998 0A17.933 17.933
                             0 0 1 12 21.75c-2.676
                             0-5.216-.584-7.499-1.632Z"/>
                </svg>
            @endif
        @else
            {{-- Guest --}}
            <div class="text-amber-100 bg-amber-300 border-2 border-amber-100
                        rounded-full w-8 h-8 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 6a3.75 3.75 0 1 1-7.5 0
                             3.75 3.75 0 0 1 7.5 0ZM4.501
                             20.118a7.5 7.5 0 0 1
                             14.998 0A17.933 17.933
                             0 0 1 12 21.75c-2.676
                             0-5.216-.584-7.499-1.632Z"/>
                </svg>
            </div>
        @endauth
    </button>

    {{-- Dropdown --}}
    <div
        x-show="open"
        x-transition
        class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-md p-1 z-50"
    >
        <a
            href="/products/choose-category"
            wire:navigate
            class="block px-3 py-1 bg-emerald-300 font-bold text-white rounded hover:bg-emerald-400"
        >
            New Product
        </a>

        <a
            href="/dashboard"
            wire:navigate
            class="block px-3 py-1 rounded hover:bg-gray-200"
        >
            Dashboard
        </a>
    </div>
</div>
