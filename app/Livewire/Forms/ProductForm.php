<?php

namespace App\Livewire\Forms;

// use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public string $product_category = '';
    public string $ornament_type = '';
    public string $ornament_varian = '';
    public string $description = '';
    public string $gold_color = '';
    public string $purity = '';

    public ?float $weight = null;
    public ?float $weight_price = null;
    public float $total_price = 0;

    // public float $labor_cost = 0;
    // public float $subtotal = 0;
    // public float $discount = 0;
    // public float $grand_total = 0;

    public function calculateWeightPrice()
    {
        if ($this->weight && $this->weight_price) {
            $this->total_price = $this->weight * $this->weight_price;
        }

        // $this->subtotal = $this->total_price + $this->labor_cost;
        // $this->grand_total = $this->subtotal - $this->discount;
    }

    public function calculateTotalPrice() {
        if ($this->total_price && $this->weight) {
            $this->weight_price = $this->total_price / $this->weight;
        }
    }
    public function store() {
        dd($this);        
    }
}
