<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class SiteController extends Controller {
    public function index() {
       $products = Product::paginate(6);

       return view('site.home', compact('products'));
    }

    public function details($slug) {
        $product = Product::where('slug', $slug)->first();

        return view('site.details', compact('product'));
    }
}
