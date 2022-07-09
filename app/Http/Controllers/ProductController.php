<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = product::latest()->filter(request(['cari']))->paginate(12);
        if ($request->ajax()) {
            return view('product.product-pagination', [
                'categories' => Category::all()
            ]);
        };
        return view('product', [
            'products' => $products,
            'categories' => Category::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'products' => $category->products,
            'category' => $category->nama_kategori,
            'categories' => Category::all()
        ]);
    }

    public function flashSale()
    {
        return view('flash-sale', [
            'products' => product::latest()->filter(request(['cari']))->paginate(8),
            'categories' => Category::all()
        ]);
    }

    public function productList()
    {
        return view('product-list', [
            'products' => product::latest()->filter(request(['cari']))->paginate(12),
            'categories' => Category::all()
        ]);
    }

    public function detailProduct(product $product)
    {
        return view('detail-product', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function sendProduct(Request $request)
    {
        $product = json_decode($request->product);
        $jumlah = $request->quantity;
        $nama_product = $product->nama_product;
        return Redirect::to('https://api.whatsapp.com/send?phone=62895330038078&text=*Assalamualaikum%20Warahmatullahi%20Wabarakatuh*%20%0A%0ASaya%20ingin%20membeli%20' . $nama_product . '%20sebanyak%20' . $jumlah . '%20kak');
    }

    public function tanyaProduct(Request $request)
    {
        $pertanyaan = $request->pertanyaan;
        $pesan = str_replace(array("\r", "\n"), '%0A', $request->pertanyaan);
        return Redirect::to('https://api.whatsapp.com/send?phone=62895330038078&text=' . $pesan);
    }
}
