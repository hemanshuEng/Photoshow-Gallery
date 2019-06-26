<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Photo;
class PhotosController extends Controller
{
    //
    public function create($album_id){
        return view('photos.create')->with('album_id',$album_id);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'photo'=>'image|max:1999'
        ]);

        $filenamewithExt = $request->file('photo')->getClientOriginalName();
        $filename = pathinfo($filenamewithExt,PATHINFO_FILENAME);
        $extension =$request->file('photo')->getClientOriginalExtension();
        $filenameTostore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'),$filenameTostore);

        $photo = new Photo;
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getClientSize();
        $photo->album_id = $request->input('album_id');
        $photo->photo = $filenameTostore;

        $photo->save();
        return redirect('/albums/'.$request->input('album_id'))->with('success','photo uploaded');
    }

    public function show($id){
        $photo = Photo::find($id);
        return view('photos.show')->with('photo',$photo);
    }

    public function destroy($id){
        $photo = Photo::find($id);
        if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
            $photo->delete();
        }
        return redirect('/albums/'.$photo->album_id)->with('success','Photo Deleted');
    }
}
