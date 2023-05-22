<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductListResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ProductListResource::collection(Product::query()->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     *
     * @return ProductResource
     */
    public function store(ProductRequest $request): ProductResource
    {
        return new ProductResource(
            Product::create($request->validated())
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param Product $product
     *
     * @return ProductResource
     */
    public function update(ProductRequest $request, Product $product): ProductResource
    {
        $product->update($request->validated());

        return new ProductResource($product);
    }


    /**
     *
     * Remove the specified resource from storage.
     *
     * @param Product $product
     *
     * @return Response
     */
    public function destroy(Product $product): \Illuminate\Http\Response
    {
        $product->delete();

        return response()->noContent();
    }
}
