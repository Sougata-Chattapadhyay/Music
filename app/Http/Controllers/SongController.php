<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\song;
use App\Models\Artist;
use App\Models\artist_song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $artist = Artist::all();
        // dd($artist);
        return view('Song.addSong');
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
    public function store(Request $r)
    {
        //
        // dd('get it',$r['photo']);
        $file = $r['photo'];
        $destination = env("UPLOAD_PATH"). DIRECTORY_SEPARATOR .$file->getClientOriginalName();;
        if(move_uploaded_file($file, $destination)){
            $path = $destination;
        }
        // dd($r->all());
        $song = new song();
        $song->Name = $r->song;
        $song->DOR = $r->date;
        $song->Image_path = $path;
        $song->save();
        $map1 = new artist_song();
        $map1->A_id = $r->artist;
        $map1->S_id = $song->id;
        $map1->save();
        return redirect('/home');
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
