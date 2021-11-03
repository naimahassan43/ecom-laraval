<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts= Product::orderBy('id','desc')->paginate(21);
        return view('frontend.pages.products.index',compact('allProducts'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $productDetails = Product::where('slug', $slug)->first();
        return view('frontend.pages.products.details',compact('productDetails'));
    }
    
}
