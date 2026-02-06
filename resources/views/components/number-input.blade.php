@props([
    'placeholder' => '',
])

@php
    $wireModel = collect($attributes->getAttributes())
        ->keys()
        ->first(fn ($key) => str_starts_with($key, 'wire:model'));
@endphp

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
    document.addEventListener('alpine:init', () => {
        Alpine.data('numberInput', (entangled) => ({
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
        }))
    })
</script>