<?php

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Modelable;

new class extends Component
{
    public string $table;

    #[Reactive]
    public string $parent_slug;

    #[Modelable]
    public string $model;

    public array $sources = [];
    public string $inputed = '';
    public string $selected = '';
    public array $filtered = [];

    #[On('parentSlugChanged')]
    public function parentSlugChanged($parent_slug, $table)
    {
        if ($this->table === $table) {
            $this->parent_slug = $parent_slug;
            $this->defineSources($parent_slug);
            // logger($this->parent_slug);
        }
        // dd($this->parent_slug);
    }

    public function mount($table, $parent_slug = '')
    {
        $this->table = $table;
        $this->parent_slug = $parent_slug;
        $this->defineSources($parent_slug);
        // dd($this->sources);
        // dd($this->sources[0]->id);
    }

    public function defineSources($parent_slug) {
        if (!empty($parent_slug)) {
            $data = DB::table($this->table)->select('id', 'slug', 'name')->where('parent_slug', $parent_slug)->get()->toArray();
        } else {
            $data = DB::table($this->table)->select('id', 'slug', 'name')->get()->toArray();
        }
        $this->sources = $data ?? [];
    }

    public function updatedInputed($value)
    {
        if (empty($value)) {
            $this->filtered = [];
            return;
        }

        $this->filtered = collect($this->sources)
            ->filter(fn ($item) =>
                str_contains(
                    strtolower($item->name ?? ''),
                    strtolower($value)
                )
            )
            ->values()
            ->toArray();
    }

    public function selectOption($id) {
        // $selected_option = $this->sources->firstWhere('id', $id);
        $selected_option = current(array_filter(
            $this->sources,
            fn($item) => $item->id == $id
        ));
        // dd($selected_option);
        $this->selected = $selected_option->slug;
        $this->model = $selected_option->slug;
        // dd($this->selected);
        // $this->selected = $this->ornament_varians->firstWhere('id', $id);
        $this->inputed = $selected_option->name;
        $this->filtered = [];
    }
};
?>

<div class="w-full">
    <input type="text" wire:model.live.debounce.300ms="inputed" class="border border-slate-300 rounded w-full p-1">
    @if(!empty($filtered))
        <ul class="border rounded mt-1 bg-white">
            @foreach($filtered as $item)
                <li 
                    class="px-2 py-1 hover:bg-gray-100 cursor-pointer"
                    wire:click="selectOption({{ $item->id }})"
                >
                    {{ $item->name }}
                </li>
            @endforeach
        </ul>
    @endif
</div>