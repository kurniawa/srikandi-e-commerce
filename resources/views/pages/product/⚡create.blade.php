<?php

use Livewire\Component;
use App\Models\GoldColor;
new class extends Component
{
    public string $category = 'jewelry';
    public $gold_colors;

    public function mount()
    {
        $this->gold_colors = GoldColor::all();
    }
};
?>

<div>
    <div class="m-2 p-2 border rounded shadow drop-shadow">
        <form action="" method="POST" class="flex flex-col gap-6 relative">
            <div class="grid grid-cols-2 gap-x-2 gap-y-4">
                <div class="grid gap-2">
                    <label>Kategori Produk:</label>
                    <input type="text" name="product_category" wire:model="category" class="bg-gray-50 font-bold text-xs" disabled />
                </div>
                <div class="grid gap-2">
                    <label>Tipe Ornament:</label>
                    <Autocomplete
                        v-model="form.ornament_type"
                        v-model:selected="form.ornament_type_slug"
                        table="ornament_types"
                        column="localname"
                        parent="category"
                        parent-value="jewelry"
                        placeholder="Tipe Ornament"
                    />
                    <InputError :message="form.errors.ornament_type" />
                </div>
                <div class="grid gap-2">
                    <label>Varian Ornament:</label>
                    <Autocomplete
                        v-model="form.ornament_variant"
                        v-model:selected="form.ornament_variant_slug"
                        table="ornaments"
                        column="varian"
                        parent="type"
                        :parent-value="form.ornament_type_slug"
                        placeholder="Varian Ornament"
                    />
                    <InputError :message="form.errors.ornament_variant" />
                </div>
                <div class="grid gap-2">
                    <label>Deskripsi (opt.):</label>
                    <input type="text" name="description" placeholder="Deskripsi (opt.)" />
                </div>
                <div class="grid gap-2">
                    <label>Warna Emas:</label>
                    <select name="gold_color">
                        @foreach ($gold_colors as $color)
                        <option value="{{ $color->slug }}">{{ $color->localname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid gap-2">
                    <label>Kadar:</label>
                    <Autocomplete
                        v-model="form.gold_ratio"
                        v-model:selected="form.gold_ratio_slug"
                        table="gold_standards"
                        column="purity"
                        :parent="null"
                        :parent-value="null"
                        placeholder="Kadar"
                    />
                </div>
                <div class="grid gap-2">
                    <label>Berat (g):</label>
                    <input type="number" step="0.01" name="weight" placeholder="Berat" />
                </div>
                <div class="grid gap-2">
                    <label>Harga per gram:</label>
                    <x-number-input></x-number-input>
                </div>
                <div class="grid gap-2">
                    <Label>Harga total:</Label>
                    <MoneyInput
                        v-model="form.total_price"
                        placeholder="Harga total"
                        class="border rounded-md px-3 py-1 w-full"
                    />
                    <InputError :message="form.errors.total_price" />
                </div>
                <div v-if="selectedSpecs.includes('checkbox_gems')">
                    <div v-for="(gem, index) in form.gems" :key="index" class="mb-4">
                        <ComponentGem
                            v-model:colorName="gem.color_name"
                            v-model:colorSlug="gem.color_slug"
                            v-model:quantity="gem.quantity"
                            v-model:transparency="gem.transparency"
                            @remove="form.gems.splice(index, 1)"
                        />
                    </div>
                    <button type="button" @click="addGem" class="bg-emerald-400 text-white font-bold rounded-2xl py-1 px-2">+ Tambah Gem</button>
                </div>
                <!-- <ComponentToys  v-if="selectedSpecs.includes('checkbox_toys')" />
                <ComponentSize  v-if="selectedSpecs.includes('checkbox_size')" />
                <ComponentBrand v-if="selectedSpecs.includes('checkbox_brand')" />
                <ComponentPlate v-if="selectedSpecs.includes('checkbox_plate')" /> -->
            </div>

            <SpecOptions v-model="selectedSpecs" />
            <Button
                type="submit"
                class="mt-4 w-full"
                :tabindex="4"
                :disabled="processing"
                data-test="login-button"
            >
                <LoaderCircle
                    v-if="processing"
                    class="h-4 w-4 animate-spin"
                />
                Submit
            </Button>
        </form>
    </div>
</div>