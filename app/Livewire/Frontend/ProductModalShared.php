<?php

namespace App\Livewire\Frontend;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductModalShared extends Component
{
    public $productModalCount = false;
    public $productModal;
    public $quantity = 1;

    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function increaseQuantity()
    {
        if ($this->productModal->quantity > $this->quantity) {
            $this->quantity++;
        } else {
            $this->alert('warning', 'This is maximum quantity you can add!');
        }
    }

    #[On('showProductModalAction')]
    public function showProductModalAction($slug)
    {
        $this->productModalCount = true;
        $this->productModal = Product::withAvg('reviews', 'rating')->whereSlug($slug)->Active()->HasQuantity()->ActiveCategory()->first();
        
        if (!$this->productModal) {
            $this->productModalCount = false;
        }
    }

    public function render()
    {
        return view('livewire.frontend.product-modal-shared');
    }
}
