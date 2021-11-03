<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;
use App\Models\Backend\Brand;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($slug)
        {
            $category = Category::find($slug);
            if(!is_null($category)){
                return view('frontend.pages.categories.show', compact('category'));
            }
            else{
                return redirect()->route('homepage');
            }
        }

}