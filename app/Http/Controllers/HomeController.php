<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.session');
    }
    
    public function dashboard_GET(){
        return view('dashboard.index');
    }

    public function pages_GET(Request $request){
        return view('manage.index');
    }
    public function music_GET(Request $request){
        return view('datas.music.index');
    }

    public function social_media_POST(Request $request){
        $data = DB::table('information')->insert([
            'title' => $request->title,
            'type' => 'social_media'
        ]);

        $result['message'] = 'Berhasil Insert';
        $result['status'] = true;
        return $result;    
    }
    public function social_media_GET(){
        $data = DB::table('information')->where('type','social_media')->get();

        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;

        return $result;
    }

    public function social_media_UPDATE(Request $request){

        for ($i=0; $i < sizeof($request->id) ; $i++) { 
            DB::table('information')
                ->where('id',$request->id[$i])
                ->update([
                    'text' => $request->text[$i],
                    'var1' => $request->icon[$i],
                    'is_show' => $request->is_show[$i]
                ]);
        }
        $result['message'] = 'Berhasil Update';
        $result['status'] = true;
        return $result;
    }

    public function artist_POST(Request $request){
        $filePath = $request->file('file')->store('public/artist_images');
        $filename = basename($filePath);

        $data = DB::table('information')->insert([
            'title' => $request->artist,
            'text' => $filename,
            'type' => 'artist',
            'is_show' => 1
        ]);

        $result['message'] = 'Berhasil Insert';
        $result['status'] = true;
        return $result;
    }

    public function artist_GET(){
        $data = DB::table('information')->where('type','artist')->get();

        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;

        return $result;
    }

    public function artist_DELETE(Request $request){
        $check = DB::table('information')
        ->where('id', $request->id)
        ->where('var1', 1)
        ->get();
    
    if (!$check->isEmpty()) {
        $result['message'] = 'gagal';
        $result['status'] = false;
    } else {
        $data = DB::table('information')
            ->where('id', $request->id)
            ->delete();
    
        $result['message'] = 'Berhasil delete';
        $result['status'] = true;
    }
    

        
        return $result;
    }

    public function about_POST(Request $request){
        $about = DB::table('information')->where('title','about')->update([
            'text' => $request->about,
        ]);
        $visi = DB::table('information')->where('title','visi')->update([
            'text' => $request->visi,
        ]);
        $misi = DB::table('information')->where('title','misi')->update([
            'text' => $request->misi,
        ]);

        $result['message'] = 'Berhasil update';
        $result['status'] = true;
        return $result;
    }

    public function about_GET(){
        $data['about'] = DB::table('information')->where('type','about')->where('title','about')->get();
        $data['visi'] = DB::table('information')->where('type','about')->where('title','visi')->get();
        $data['misi'] = DB::table('information')->where('type','about')->where('title','misi')->get();

        $data['about'] = $data['about'][0];
        $data['visi'] = $data['visi'][0];
        $data['misi'] = $data['misi'][0];

        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;

        return $result;
    }

    public function home_POST(Request $request){
        if($request->file('file1')){
            $filePath1 = $request->file('file1')->store('public/jumbotron');
            $filename1 = basename($filePath1);
            DB::table('information')->where('title','jumbotron1')->where('type','home')->update([
                'text' => $filename1,
            ]);
        }
        if($request->file('file2')){
            $filePath2 = $request->file('file2')->store('public/jumbotron');
            $filename2 = basename($filePath2);
            DB::table('information')->where('title','jumbotron2')->where('type','home')->update([
                'text' => $filename2,
            ]);
        }
        if($request->file('file3')){
            $filePath3 = $request->file('file3')->store('public/jumbotron');
            $filename3 = basename($filePath3);
            DB::table('information')->where('title','jumbotron3')->where('type','home')->update([
                'text' => $filename3,
            ]);
        }
        
        DB::table('information')->where('type','artist')->update([
            'var1' => 0,
        ]);

        DB::table('information')->where('id',$request->artist1)->where('type','artist')->update(['var1' => 1]);
        DB::table('information')->where('id',$request->artist2)->where('type','artist')->update(['var1' => 1]);
        DB::table('information')->where('id',$request->artist3)->where('type','artist')->update(['var1' => 1]);


        $result['message'] = 'Berhasil Insert';
        $result['status'] = true;
        return $result;
    }

    public function home_GET(){
        $data['gambar1'] = DB::table('information')->where('type','home')->where('title','jumbotron1')->get();
        $data['gambar2'] = DB::table('information')->where('type','home')->where('title','jumbotron2')->get();
        $data['gambar3'] = DB::table('information')->where('type','home')->where('title','jumbotron3')->get();

        $data['gambar1'] = $data['gambar1'][0];
        $data['gambar2'] = $data['gambar2'][0];
        $data['gambar3'] = $data['gambar3'][0];

        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;

        return $result;
    }

    public function artist_home_GET(){
        $data['gambar'] = DB::table('information')->where('type','artist')->where('var1',1)->orderBy('updated_at','desc')->get();

        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;

        return $result;
    }
    public function artist_home_all_GET(){
        $data['gambar'] = DB::select("SELECT * FROM `information` WHERE type = 'artist' AND id != 25");
    
        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;
    
        return $result;
    }
}

