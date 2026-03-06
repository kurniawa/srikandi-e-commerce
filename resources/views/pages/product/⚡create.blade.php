<?php

use Livewire\Component;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\AttributeValue;
use App\Livewire\Forms\ProductForm;

new class extends Component
{
    public ProductForm $form;
    public ?Category $category = null;
    public string $product_category = '';
    public $ornament_types;
    public string $ornament_type = '';
    
    public $attribute_list;
    public array $attribute_values;
    public $metal_types;
    public $gold_colors;
    public $conditions;
    public string $purity = '';

    public string $ornament_varians_parent = '';

    public function mount()
    {
        $this->category = Category::where('slug', request()->query('category', ''))->first();
        $this->product_category = $this->category->nama;
        $this->form->product_category = $this->category->slug;
        // dd($this->category);
        $this->ornament_types = Category::select('nama', 'slug')->where('classification', 'ornament_types')->get()->toArray();
        // $this->updatedSelectedOrnamentType($this->ornament_type);
        $this->attribute_list = Attribute::orderBy('id')->pluck('slug')->toArray();
        // $this->attribute_values = AttributeValue::select('attribute_id', 'attribute_slug', 'value')->whereIn('attribute_slug', $this->attribute_list)->get();
        $this->attribute_values = AttributeValue::select('attribute_id', 'attribute_slug', 'slug', 'value')
            ->whereIn('attribute_slug', $this->attribute_list)
            ->get()
            ->groupBy('attribute_slug')
            ->map(fn ($items) => $items->toArray())
            ->toArray();
        $this->metal_types = $this->attribute_values['metal-type'] ?? [];
        $this->gold_colors = $this->attribute_values['gold-color'] ?? [];
        $this->conditions = $this->attribute_values['condition'] ?? [];
        $this->ornament_varians = collect();
        // dump($this->attribute_list);
        // dump($this->attribute_values);
        // dd($this->metal_types);

        // dd($this->gold_colors);
    }

    public function updatedOrnamentType($value) {
        $data = Category::select('slug', 'name', 'id')->where('parent_slug', $value)->get();
        $this->ornament_varians = $data ?? collect();
        // dd($this->ornament_varians);
        $this->ornament_varians_parent = $value;
        $this->form->ornament_type = $value;
        $this->dispatch('parentSlugChanged', parent_slug: $value, table: "categories");
    }

    public function updated($property)
    {
        if ($property === 'form.weight' || $property === 'form.weight_price') {
            $this->form->calculateTotalPrice();
        } elseif ($property === 'form.total_price') {
            $this->form->calculateWeightPrice();
        }
        dd($this->form);
    }

    public string $weight = '';
    public function updatedWeight() {
        dd('updated');
    }

    public function testChangeWeight() {
        $this->weight = (string)((int)$this->weight + 3);
    }

    public function testChangeWeightPrice() {
        $this->form->weight_price += 100;
    }

    public function save() {
        dd($this->form);
        // $this->form->store();
    }
};
?>

<div class="text-xs">
    <div class="m-2 p-2 border rounded shadow drop-shadow">
        <form wire:submit="save" class="flex flex-col gap-6 relative">
            <div class="grid grid-cols-2 gap-x-2 gap-y-2">
                <div class="grid">
                    <label>Kategori Produk:</label>
                    <input type="text" wire:model="product_category" class="bg-gray-50 font-bold w-full p-1" disabled />
                </div>
                <div class="grid">
                    <label>Tipe Ornament:</label>
                    <select wire:model.live="ornament_type" class="border border-slate-300 rounded w-full p-1">
                        <option value="" disabled>Pilih Tipe Ornament</option>
                        @foreach ($ornament_types as $type)
                        <option value="{{ Str::slug($type['slug']) }}">{{ $type['nama'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid">
                    <label>Varian Ornament:</label>
                    <livewire:autocomplete-reactive table="categories" :parent_slug="$ornament_varians_parent" wire:model="form.ornament_varian" />
                </div>
                <div class="grid">
                    <label>Deskripsi (opt.):</label>
                    <input type="text" wire:model="form.description" placeholder="Deskripsi (opt.)" class="border border-slate-300 rounded w-full p-1" />
                </div>
                <div class="grid">
                    <label>Warna Emas:</label>
                    <select wire:model="form.gold_color" class="border border-slate-300 rounded w-full p-1">
                        @foreach ($gold_colors as $color)
                        <option value="{{ $color['slug'] }}">{{ $color['value'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid">
                    <label>Kadar:</label>
                    <livewire:autocomplete table="metal_standards" parent_slug="" wire:model="form.purity" />
                </div>
                <div class="grid">
                    <label>Berat (g):</label>
                    <input type="number" step="0.01" placeholder="Berat" wire:model.blur.live="form.weight" class="border border-slate-300 rounded w-full p-1" />
                    <input type="number" step="0.01" placeholder="Berat" wire:model.blur.live="weight" class="border border-slate-300 rounded w-full p-1" />
                    <button type="button" class="bg-indigo-300" wire:click="testChangeWeight">test</button>
                </div>
                <div class="grid">
                    <label>Harga per gram:</label>
                    <input type="text" class="border border-slate-300 rounded p-1 number" data-model="form.weight_price" placeholder="Harga per gram" wire:ignore>
                    <button type="button" class="bg-indigo-300" wire:click="testChangeWeightPrice">test</button>
                </div>
                <div class="grid">
                    <Label>Harga total:</Label>
                    <input type="text" class="border border-slate-300 rounded p-1 number" data-model="form.total_price" placeholder="Harga total" wire:ignore>
                </div>
                
            </div>

            
            <button type="submit" class="bg-emerald-500 text-white font-bold rounded-2xl py-2 px-4 w-full">Submit</button>
        </form>
    </div>

    @vite(['resources/js/number-format.js'])
</div>

