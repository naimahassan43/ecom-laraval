<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Slider;
use Illuminate\Http\Request;
use File;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id','desc')->get();
        return view('backend.pages.sliders.manage',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required|max:255',
            'heading' =>'required|max:255',
            'description' =>'required|max:255',
        ],
        [
            'title.required' =>'Please Provide Slider title',
            'heading.required' =>'Please Provide Slider heading',
            'description.required' =>'Please Provide Slider description',
        ]);

        $slider              =  new Slider();
        $slider->title       = $request->title;
        $slider->heading     = $request->heading;
        $slider->description = $request->description;
        $slider->btn_text = $request->btnText;
        $slider->btn_link = $request->btnUrl;

        if($request->image) {
            $image=$request->file('image'); 
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('backend/img/sliders/' . $img);

            Image::make($image)->resize(300,200)->save($location);

            $slider->image = $img;
        }
        $slider->save();

        return redirect()->route('slider.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
