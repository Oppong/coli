<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

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
        //

          $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $request->validate([

            'title' => 'required',

            'body' => 'required'

        ]);

        $slider = new Slider();

        $slider->title = $request->title;

        $slider->body = $request->body;

        //now on images

        $image = $request->file('image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->resize(1366, 510)->save($location);

        $slider->image = $filename;

        $slider->save();

        return redirect()->route('slider.index');
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
         $slider = Slider::find($id);

        return view('admin.slider.edit', compact('slider'));
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


        $request->validate([

            'title' => 'required',

            'body' => 'required'

        ]);

        $slider = Slider::findOrFail($id);

        $slider->title = $request->title;

        $slider->body = $request->body;

        //now on images

        $image = $request->file('image');

        $filename = time(). '.'. $image->getClientOriginalExtension();

        $location = public_path('img/'.$filename);

        Image::make($image)->resize(1366, 510)->save($location);

        $slider->image = $filename;

        $slider->save();

        return redirect()->route('slider.index');
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

        $slider = Slider::find($id);

        $slider->delete();

        return redirect()->route('slider.index');
    }
}
