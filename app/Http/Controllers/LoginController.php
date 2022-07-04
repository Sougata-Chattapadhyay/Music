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
        // dd($artist);
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
        $artist = artist::all();
        //group_concat(inspection_and_audit_forms.id)
        $artist1 = DB::table('artist_song')
                    ->leftjoin('artist','artist.id' ,"=","artist_song.A_id")
                    ->leftjoin('song','song.id' ,"=","artist_song.S_id")
                    ->selectRaw('group_concat(song.Name) as song,artist.id as A_id')
                    ->groupBy('artist.id')
                    ->get();
        // dd($artist1);
        $mainSong = DB::table('artist_song')
                    ->leftjoin('artist','artist.id' ,"=","artist_song.A_id")
                    ->leftjoin('song','song.id' ,"=","artist_song.S_id")
                    ->leftjoin('rating','rating.S_id' ,"=","artist_song.S_id")
                    ->select(
                        'song.*',
                        'artist.id as a_id',
                        'artist.name as a_name',
                        'rating.rating'
                    )
                    ->orderBy('rating.rating','DESC')
                    ->get();
                    // dd($mainSong);
                    // $img = 
        $arr = [];
        foreach($mainSong as $m){
            $arr[''.$m->id.''] = $this->getImageBase64($m->Image_path);
        }
        // dd($arr);

        return view('Home.home',['artist' => $artist,'song' => $artist1,'mainSong' => $mainSong,'Image' => $arr]);
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
        dd('Get it');
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
    public function getFile($path){
        try {

            // Log::debug("=========== GET FILE ===========");
            // Log::debug(print_r($path, true));
            $imgPath = $path;
            // Log::info(print_r($imgPath, true));
            $imgPath = env('UPLOAD_PATH').DIRECTORY_SEPARATOR.($imgPath);
            return response()->file($imgPath);

        } catch (Exception $e) {
            report($e);
        }
    }
    public function getImageBase64($imgPath){
        try {

            // Log::info("getImageBase64 : ".print_r($imgPath, true));

            // Constructing image absolute path
            $imagePath = env('UPLOAD_PATH').DIRECTORY_SEPARATOR.$imgPath ;

            $type = pathinfo($imagePath, PATHINFO_EXTENSION);

            $arrContextOptions = array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ),
            );

            $avatarData = file_get_contents($imagePath, false, stream_context_create($arrContextOptions));
            $avatarBase64Data = base64_encode($avatarData);
            $imageData = 'data:image/' . $type . ';base64,' . $avatarBase64Data;

            return $imageData;
        } catch (Exception $e) {
            report($e);
        }
    }
}
