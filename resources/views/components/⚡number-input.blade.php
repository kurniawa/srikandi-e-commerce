<?php

use Livewire\Component;

new class extends Component
{
    $wireModel = collect($attributes->getAttributes())
        ->keys()
        ->first(fn ($key) => str_starts_with($key, 'wire:model'));
};
?>

<div x-data="numberInput(@entangle($wireModel))" class="w-full">
    <input
        type="text"
        x-model="display"
        @input="format"
        placeholder="{{ $placeholder }}"
        {{ $attributes->except($wireModel)->merge([
            'class' => 'border rounded-md px-3 py-1 w-full'
        ]) }}
    >
</div>

<script>
    function numberInput(entangled) {
        return {
            raw: entangled,
            display: '',

            init() {
                if (this.raw) {
                    this.display = this.formatNumber(this.raw)
                }
            },

            format() {
                let value = this.display.replace(/\D/g, '')
                this.raw = value
                this.display = this.formatNumber(value)
            },

            formatNumber(value) {
                if (!value) return ''
                return new Intl.NumberFormat('id-ID').format(value)
            }
        }
    }
</script>