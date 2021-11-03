<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PagesController extends Controller
{
    /**
     * Display The Ecommerce Website Home Page
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $newProducts = Product::orderBy('id','desc')->get();
        return view('frontend.pages.home', compact('newProducts'));
    }

}