<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index(){
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums',$albums);
    }

    public function create(){
        return view('albums.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'cover_image'=>'image|max:1999'
        ]);
        $filenamewithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
        $extension =$request->file('cover_image')->getClientOriginalExtension();
        $filenameTostore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/album_covers',$filenameTostore);

        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameTostore;

        $album->save();
        return redirect('/albums')->with('success','Album Created');
    }

    public function show($id){
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album',$album);
    }
}
