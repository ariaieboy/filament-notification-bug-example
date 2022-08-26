<?php

namespace App\Http\Middleware;

use App\Models\Product;
use Closure;
use Illuminate\Http\Request;

class ProductSlugRedirectorMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        $product_id = $request->route('product');
        $slug = $request->route('slug');
        $product = Product::find($product_id);
        if ($product instanceof Product && $product->slug !== $slug) {
            return redirect(route('product.show', ['product' => $product_id, 'slug' => $product->slug]), 301);
        }

        return $next($request);
    }
}
