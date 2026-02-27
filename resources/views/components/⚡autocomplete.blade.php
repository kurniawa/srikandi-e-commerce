<?php

use Livewire\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;

new class extends Component
{
    public string $table;
    public string $parent_slug;
    public Collection $sources;
    public string $inputed = '';
    public string $selected = '';
    public array $filtered = [];

    #[On('parentSlugChanged')]
    public function parentSlugChanged($parent_slug)
    {
        $this->parent_slug = $parent_slug;
        logger($this->parent_slug);
        if (!empty($parent_slug)) {
            $data = DB::table($this->table)->select('id', 'slug', 'name')->where('parent_slug', $parent_slug)->get();
        } else {
            $data = DB::table($this->table)->select('id', 'slug', 'name')->get();
        }
        $this->sources = $data ?? collect();
        dd($this->sources);
    }

    public function mount($table, $parent_slug = '')
    {
        $this->table = $table;
        $this->parent_slug = $parent_slug;
        if (!empty($parent_slug)) {
            $data = DB::table($this->table)->select('id', 'slug', 'name')->where('parent_slug', $parent_slug)->get();
        } else {
            $data = DB::table($this->table)->select('id', 'slug', 'name')->get();
        }
        $this->sources = $data ?? collect();

        // dd($this->sources);
        // dd($this->sources[0]->id);
    }

    public function updatedInputed($value) {
        if (count($this->sources) > 0 && !empty($value)) {
            $this->filtered = $this->sources->filter(function ($item) use ($value)  {
                return str_contains(strtolower($item->name), strtolower($value));
            })->values()->toArray();
        }
        // dd($this->sources);
        // dd($this->filtered);
    }

    public function selectOption($id) {
        $selected_option = $this->sources->firstWhere('id', $id);
        // dd($selected_option);
        $this->selected = $selected_option->slug;
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