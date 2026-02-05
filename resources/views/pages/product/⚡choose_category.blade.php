<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="flex gap-2">
                    <a href="#" wire:navigate>Gold Bullion</a>
                    <a href="{{ route('product.create', ['category' => 'jewelry']) }}" wire:navigate>Jewelry</a>
                </div>
            </div>
        </div>
    </div>
</div>