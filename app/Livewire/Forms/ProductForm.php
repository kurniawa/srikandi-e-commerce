<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public string $product_category = '';
    public string $ornament_type = '';
    public string $purity = '';
}
