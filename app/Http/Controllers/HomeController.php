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
        $this->middleware('auth.session')->except(['homePAGE' , 'contactPAGE' , 'artistPAGE' , 'artistDetailPAGE' , 'servicesPage' , 'aboutPage']);
    }
    
    public function dashboard_GET(){
        $data = DB::table('mail')->paginate(5);
        // $summary = DB::table('information')->where('type','status')->where('title','status_clicked')->first();
        $summary = DB::table('mail')->count();
        return view('dashboard.index' , ['data'=>$data , 'status'=> $summary]);
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
        $artist_detail = DB::table('artists_detail')
            ->where('information_id', $request->id)
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

        // $validator = Validator::make($request->all(), [
        //     'file1' => 'required|image|dimensions:width=1920,height=1080',
        //     'file2' => 'required|image|dimensions:width=1920,height=1080',
        //     'file3' => 'required|image|dimensions:width=1920,height=1080',
        // ]);
    
        // if ($validator->fails()) {
        //     $result['message'] = 'Gagal Update Data , Gambar Harus 1920 x 1080';
        //     $result['status'] = false;
        //     return $result;        
        // }
    
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

    public function music_POST(Request $request){
        $title = $request->music_title;
        $filePath = $request->file('file_music')->store('public/music');
        $filename = basename($filePath);

        $data = DB::table('music')->insert([
            'title' => $request->music_title,
            'file' => $filename
        ]);

        return back()->with('success','data berhasil diinsert');
    }

    public function music_PAGE(){
        $data = DB::table('music')->get();

        return view('datas.music.index',['data'=>$data]);
    }

    public function music_DELETE(Request $request, $id){
        $filePath = DB::table('music')->where('id', $id)->value('file');
    
        // Delete the record from the database
        DB::table('music')->where('id', $id)->delete();
    
        // Check if the file path is not empty and the file exists in storage
        if (!empty($filePath) && Storage::exists('public/music/' . $filePath)) {
            // Delete the file from storage
            Storage::delete('public/music/' . $filePath);
        }
    
        return back()->with('success', 'Berhasil Hapus Data');
    }

    public function services_GET(Request $request){
        $data = DB::table('information')->where('type','services')->get();
        $result['message'] = 'data has been loaded';
        $result['status'] = true;
        $result['data'] = $data;

        return $result;
    }

    public function services_POST(Request $request){
        $file1_name = null;
        $file2_name = null;
        $file3_name = null;
        $file4_name = null;
        $file5_name = null;

        $data1 = [
            'text' => $request->artist_management,
        ];

        $data2 = [
            'text' => $request->music_publishing,
        ];

        $data3 = [
            'text' => $request->content_provider,
        ];

        $data4 = [
            'text' => $request->digital_distribution,
        ];

        $data5 = [
            'text' => $request->brand_extension,
        ];

        if ($request->hasFile('file1')) {
            $file1 = $request->file('file1')->store('public/services');
            $file1_name = basename($file1);
            $data1['var1'] = $file1_name;
        }

        if ($request->hasFile('file2')) {
            $file2 = $request->file('file2')->store('public/services');
            $file2_name = basename($file2);
            $data2['var1'] = $file2_name;
        }

        if ($request->hasFile('file3')) {
            $file3 = $request->file('file3')->store('public/services');
            $file3_name = basename($file3);
            $data3['var1'] = $file3_name;
        }

        if ($request->hasFile('file4')) {
            $file4 = $request->file('file4')->store('public/services');
            $file4_name = basename($file4);
            $data4['var1'] = $file4_name;
        }

        if ($request->hasFile('file5')) {
            $file5 = $request->file('file5')->store('public/services');
            $file5_name = basename($file5);
            $data5['var1'] = $file5_name;
        }

        DB::table('information')->where('title', 'artist_management')->update($data1);
        DB::table('information')->where('title', 'music_publishing')->update($data2);
        DB::table('information')->where('title', 'content_provider')->update($data3);
        DB::table('information')->where('title', 'digital_distribution')->update($data4);
        DB::table('information')->where('title', 'brand_extension')->update($data5);


        $result['message'] = 'Berhasil update';
        $result['status'] = true;
        return $result;
    }

    public function artistPAGE(Request $request){
        $artist_name = $request->artist_name;

        if ($artist_name) {
            $data = DB::table('information')->where('type', 'artist')->where('title', 'LIKE', "%$artist_name%")->get();
        } else {
            $data = DB::table('information')->where('type', 'artist')->get();
        }        
        return view('artist' , ['data'=>$data]);
    }
    public function artistDetailPAGE($id){
        $data = DB::select("SELECT ad.* , i.title AS name , i.text AS photo FROM artists_detail AS ad LEFT JOIN information AS i ON ad.information_id = i.id WHERE i.id = $id");
        if(sizeof($data) == 0){
            return back();
        }
        return view('detailsArtist',['data'=> $data[0]]);
    }
    public function mailPage(){
        $data = DB::table('mail')->orderBy('created_at','ASC')->paginate(10);
        return view('datas.mail',['mail'=> $data]);
    }

    public function homePAGE(){
        $data_artist = DB::table('information')->where('type', 'artist')->where('var1',1)->get();
        $data_jumbotron = DB::table('information')->where('type', 'home')->get();
        $about = DB::table('information')->where('type', 'about')->where('title','about')->first();
        return view('index',['artist'=>$data_artist , 'jumbotron'=>$data_jumbotron , 'about'=>$about]);
    }

    public function contactPage(){
        $data_contact = DB::table('information')->where('type','social_media')->get();
        return view('contact' , ['contact'=>$data_contact]);
    }
    public function servicesPage(){
        $data_services = DB::table('information')->where('type','services')->get();
        return view('services' , ['services'=>$data_services]);
    }
    public function aboutPAGE(){
        $about = DB::table('information')->where('type','about')->where('title','about')->first();
        $visi = DB::table('information')->where('type','about')->where('title','visi')->first();
        $misi = DB::table('information')->where('type','about')->where('title','misi')->first();

        return view('about' , ['about'=>$about ,'visi'=> $visi ,'misi'=> $misi]);
    }
    public function deleteMail($id){
        DB::table('mail')->where('id',$id)->delete();
        return back()->with('success','Berhasil Hapus data');
    }

    public function detailArtistAdmin(){
        $data = DB::select("SELECT i.* , ad.debut , ad.debut_album , ad.top_track , ad.album , ad.text AS deskripsi FROM information AS i LEFT JOIN artists_detail AS ad ON i.id = ad.information_id WHERE type = 'artist'");
        return view('datas.detail_artist',['data'=> $data]);
    }

    public function updateArtistDetail(Request $request){
        $id = $request->editId;
        $title = $request->editTitle;
        $editDebut = $request->editDebut;
        $editDebutAlbum = $request->editDebutAlbum;
        $editTopTrack = $request->editTopTrack;
        $editAlbum = $request->editAlbum;
        $editDeskripsi = $request->editDeskripsi;

        DB::beginTransaction();
        try{
            
            if($id != null && $id != ''){
                DB::table('artists_detail')->where('information_id' , $id)->update([
                    'debut' => $editDebut,
                    'debut_album' => $editDebutAlbum,
                    'top_track' => $editTopTrack,
                    'album' => $editAlbum,
                    'text' => $editDeskripsi,
                ]);
                DB::table('information')->where('id' , $id)->update([
                    'title' => $title,
                ]);
            }else{
                DB::table('artists_detail')->create([
                    'debut' => $editDebut,
                    'debut_album' => $editDebutAlbum,
                    'top_track' => $editTopTrack,
                    'album' => $editAlbum,
                    'text' => $editDeskripsi,
                    'information_id' => $id,
                ]);
            }
    
            DB::commit();
            return back()->with('success','Berhasil Update Data');
        }catch(Excpetion $e){
            DB::rollback();
            return back()->with('error','Gagal Update Data');
        }
    }
}

