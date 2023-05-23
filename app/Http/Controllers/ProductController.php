<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ProductController extends Controller
{
    /**
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $products = Product::query()
            ->where('published', '=', 1)
            ->orderBy('updated_at', 'desc')
            ->paginate(5);
        return view('product.index', [
            'products' => $products
        ]);
    }

    /**
     * @param Product $product
     *
     * @return View|Application|Factory|\Illuminate\Contracts\Foundation\Application
     */
    public function view(Product $product): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('product.view', ['product' => $product]);
    }
}
