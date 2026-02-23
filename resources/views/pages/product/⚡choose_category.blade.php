<?php

use Livewire\Component;
use App\Models\Category;

new class extends Component
{
    public $product_categories;

    public function mount()
    {
        $this->product_categories = Category::where('classification', 'material')->get();
    }
};
?>

<div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="flex gap-2">
                    @foreach ($product_categories as $category)
                    <a href="{{ route('product.create', ['category' => $category->slug]) }}" wire:navigate class="rounded bg-amber-400 px-2 text-white font-bold hover:bg-amber-500">{{ $category->nama ? $category->nama : $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>