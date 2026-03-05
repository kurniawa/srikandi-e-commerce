<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Validate('string')]
    public string $product_category = '';
    #[Validate('string')]
    public string $ornament_type = '';
    #[Validate('string')]
    public string $ornament_varian = '';
    #[Validate('string')]
    public string $description = '';
    #[Validate('string')]
    public string $gold_color = '';
    #[Validate('numeric')]
    public string $purity = '';
    #[Validate('numeric')]
    public string $weight = '';

    public function store() {
        dd($this->ornament_type);        
    }
}
