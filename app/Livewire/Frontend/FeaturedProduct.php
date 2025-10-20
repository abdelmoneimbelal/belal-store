<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product;

class FeaturedProduct extends Component
{
    public function render()
    {
        return view('livewire.frontend.featured-product', [
            'featuredProducts' => Product::with('firstMedia')
                ->inRandomOrder()->Featured()->Active()->HasQuantity()->ActiveCategory()
                ->take(8)->get()
        ]);
    }
}
