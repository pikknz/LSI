<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
        return view('product.show', compact('product'));
    }


    public function productEnquiry(Request $request): View
    {
        return view('product.enquiry', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'enquiry' => $request->get('enquiry') ]
        );
    }
}
