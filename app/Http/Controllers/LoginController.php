<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\song;
use App\Models\Artist;
use App\Models\artist_song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('Hey');
        $artist = artist::all();
        dd($artist);
        return view('Login.login',['artist'=>$artist]);
        // if($users)
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $r)
    {
        //
        // dd('Get it');
        $users = Users::where('email',$r->email)->first();
        // dd($users);
        if($users == null){
            $N_user = new Users();
            $N_user->email = $r->email;
            $N_user->save(); 
            $r->session()->put('id',$N_user->id);
            // dd(session('id'));
            return redirect('/home');
        }
        else{
            $r->session()->put('id',$users->id);
            // dd(session('id'));
            return redirect('/home');
        }
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
    public function show()
    {
        //
        // $artist = DB::table('artist_song')
        //             ->leftjoin()
        return view('Home.home',['artist' => $artist]);
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
