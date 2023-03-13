<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $categories, $products;
    public function getAllCategory()
    {
        $this->categories = Category::all();
        foreach ($this->categories as $category)
        {
            $category->sub_categories = $category->subCategories;
        }
        return response()->json($this->categories);
    }

    public function getAllTrendingProduct()
    {
        $this->products = Product::where('status', 1)->orderBy('id', 'desc')->take(8)
            ->get(['id', 'name', 'selling_price', 'image', 'category_id']);

        foreach ($this->products as $product)
        {
            $product->image = asset($product->image);
            $product->category_name = $product->category->name;
        }
        return response()->json($this->products);
    }

    public function getCategoryProduct($id)
    {
        $this->products = Product::where('category_id', $id)->get();

        foreach ($this->products as $product)
        {
            $product->image = asset($product->image);
            $product->category_name = $product->category->name;
        }
        return response()->json($this->products);
    }
}
