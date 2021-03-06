<?php

namespace App\Http\Controllers\Pub;

use App\Models;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('pub.photo', compact('photos'));
    }

    public function save(Request $request)
    {
        $title = $request->input('title');
        $date  = $request->input('date');

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $fileName = $file->getFilename();
            $path = 'photo';

            Storage::disk('public')->putFileAs($path, $file, $file->getClientOriginalName());

            $ok = Photo::create([
                'title' => $title,
                'date' => $date,
                'file' => $path . '/' . $file->getClientOriginalName(),
                

            ]);
            if($ok)
            {
                return back()->with('success', 'ОК');
            }
                return back()->with('error', 'Ошибка');
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
