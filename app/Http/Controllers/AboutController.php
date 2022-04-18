<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about =about::latest()->get();
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new about();
        $about->htext =$request['htext'];
        $about->title =$request['title'];
        $about->img =$request['img'] ;
        $about->para1 =$request['para1'];
        $about->para2 = $request['para2'];
        $about->save();
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about=about::find($id);
        return view('about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $about=about::find($id);
        $about->htext=$request['htext'];
        $about->title=$request['title'];
        $about->para1=$request['para1'];
        $about->para2=$request['para2'];
        $about->update();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = about::where('id',$id)->first();
        $about->delete();
        return redirect()->route('about.index');
    }
}
