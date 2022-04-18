<?php

namespace App\Http\Controllers;

use App\Models\filemanager;
use Illuminate\Http\Request;


class FilemanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filemanager =filemanager::latest()->get();
        return view('filemanager.index',compact('filemanager'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filemanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = str_replace(' ','',request('name'));
        $ext = $request->img->extension();
        $finalname = $filename.''.time().'.'.$request->img->extension();
        $request->img->move(public_path('uploads/files/'),$finalname);

        $files = new Filemanager();
        $files->name =$request['name'];
        $files->details =$request['details'];
        $files->img=$finalname;
        $files->ext = $ext;
        $files->save();
        return redirect()->route('filemanager.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\filemanager  $filemanager
     * @return \Illuminate\Http\Response
     */
    public function show(filemanager $filemanager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\filemanager  $filemanager
     * @return \Illuminate\Http\Response
     */
    public function edit(filemanager $filemanager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\filemanager  $filemanager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, filemanager $filemanager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\filemanager  $filemanager
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filemanager = filemanager::where('id',$id)->first();
        $filemanager->delete();
        return redirect()->route('filemanager.index');
    }
}
