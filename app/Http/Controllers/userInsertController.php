<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class userInsertController extends Controller
{
    //
    public function insertform(){
        return view('index');
    }

    public function insert(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('pass');
        $mob = $request->input('mob');

        DB::insert('insert into users (name,email,password,remember_token,created_at,updated_at,mobile_number) values("'.$name.'","'.$email.'","'.Hash::make($pass).'","'.Hash::make("Fairy".$pass).'",NOW(),NOW(),"'.$mob.'")');
        return view('index');
    }
    public function insertLive(Request $request){
        $name = $request->input('live_link');


        DB::insert("INSERT INTO live(link) values('".$name."')");
        return redirect('/live');
    }
    public function deleteLive($lid){


        DB::table('live')->where('live_id','=',$lid)->delete();
        return redirect('/live');
    }
    public function insertFB($name,$email){

        $pass = '12345';
        $mob = '';

        DB::insert('insert into users (name,email,password,remember_token,created_at,updated_at,mobile_number) values("'.$name.'","'.$email.'","'.Hash::make($pass).'","'.Hash::make("Fairy".$pass).'",NOW(),NOW(),"'.$mob.'")');
        return view('index');
    }
    public function insertProposal(Request $request){

        $email = $request->input('email');

        $mob = $request->input('mob');

       DB::insert('INSERT INTO `proposal`(`email`, `mobile`) VALUES ("'.$email.'","'.$mob.'")');
        return "Your request successfully sent. Our executive call you very soon.";
    }
    public function insertLabel(Request $request){


        $email = $request->input('email');
        $fname = $request->input('fname');

        $mob = $request->input('mob');

       DB::insert('INSERT INTO `Labels`(`email`, `mobile`,full_name) VALUES ("'.$email.'","'.$mob.'","'.$fname.'")');
        return "Your request successfully sent. Our executive call you very soon.";
    }
    public function insertContact(Request $request){


        $msg = $request->input('msg');
        $fname = $request->input('fname');

        $mob = $request->input('mob');

       DB::insert('INSERT INTO `ContactUS`(`description`, `mob`,full_name) VALUES ("'.$msg.'","'.$mob.'","'.$fname.'")');
        return "Your request successfully sent. Our executive call you very soon.";
    }

    public function updateBanner($id,$status){

        DB::table('banner')->where('banner_id','=',$id)->update(['isActive'=>$status]);





        return $status;
    }
    public function updateT($id,$status){

        DB::table('Tracks')->where('track_id','=',$id)->update(['isActive'=>$status]);





        return $status;
    }
    public function updateV($id,$status){

        DB::table('videos')->where('video_id','=',$id)->update(['isActive'=>$status]);





        return $status;
    }
    public function changePassword($pass,$id){

        DB::table('users')->where('id','=',$id)->update(['password'=>Hash::make($pass)]);





        return 'Password Changed Successfully.';
    }
    public function updateM($id,$status){

        DB::table('movies')->where('movie_id','=',$id)->update(['isActive'=>$status]);





        return $status;
    }
    public function delT($id){

        DB::table('Tracks')->where('track_id','=',$id)->delete();
        return $id;
    } public function delV($id){

        DB::table('videos')->where('video_id','=',$id)->delete();
        return 1;
    } public function delM($id){

        DB::table('movies')->where('movie_id','=',$id)->delete();
        return 1;
    } public function delC($id){

        DB::table('users')->where('id','=',$id)->delete();

        return 1;
    }
    public function insertTrack1(Request $request){
        $name = $request->input('track_name');
        $filename ="none";

        if($request->hasFile('track_file')) {
            $file = $request->file('track_file');
            $filename=time()."_".rand(1000,100000);
            $filename.= $file->getClientOriginalName();

            $destinationPath = 'uploadTracks/';

            $file->move($destinationPath, $filename);
        }



        $tid = $request->input('track_id');

        DB::insert('INSERT INTO `Tracks_source`(`track_url`, `track_src_name`, `track_id`) VALUES ("'.$filename.'","'.$name.'",'.$tid.')');
        return "Song Uploaded Successfully!";
    }

    public function insertBanner(Request $request){
        $name = $request->input('t_name');
        $filename ="none";
        if($request->hasFile('b_image')) {
            $file = $request->file('b_image');
            $filename=time()."_".rand(1000,100000);
            $filename.= $file->getClientOriginalName();

            $destinationPath = 'uploads/';

            $file->move($destinationPath, $filename);
        }

        DB::insert('INSERT INTO `banner`(`banner_name`, `banner_url`) VALUES ("'.$name.'","'.$filename.'")');
        return "Banner Uploaded Successfully!";
    }
    public function insertTrack_src1(Request $request){
        $name = $request->input('t_name');
        $s_name = $request->input('s_name');
        $l_name = $request->input('l_name');
        $des = $request->input('des');
        $lyric = $request->input('lyrics');
        $v_url = $request->input('video_url');
        $filename ="none";
        $wfilename ="none";
        if($request->hasFile('w_track')) {
            $file = $request->file('w_track');
            $wfilename=time()."_".rand(1000,100000);
            $wfilename.= $file->getClientOriginalName();

            $destinationPath = 'uploadTracks/';

            $file->move($destinationPath, $wfilename);
        }
        
        if($request->hasFile('pt_image')) {
            $file = $request->file('pt_image');
            $filename = $file->getClientOriginalName();
            $destinationPath = 'uploads/';

            $file->move($destinationPath, $filename);
        }


        $t_type=$request->input('t_type');

       $i=DB::insert("INSERT INTO `Tracks`(`track_name`, `singer_name`, `label_name`, `description`, `track_type`, `isActive`, `trending`, `trending_seq`, `track_poster`,track_lyrics,video_url)VALUES ('".$name."','".$s_name."','".$l_name."','".$des."','".$t_type."',1,1,1,'".$filename."','".$lyric."','".$v_url."')");
        $id = DB::table('Tracks')->max('track_id');
        DB::insert('INSERT INTO `wavtrack`(`track_id`, `w_path`) VALUES('.$id.',"'.$wfilename.'")');

        return $id;
    }

    public function insertVideo_src1(Request $request){
        $name = $request->input('t_name');
        $s_name = $request->input('s_name');
        $l_name = $request->input('l_name');
        $des = $request->input('des');
        //$lyric = $request->input('lyrics');
        $v_url = $request->input('video_url');
        $filename ="none";
        if($request->hasFile('pt_image')) {
            $file = $request->file('pt_image');
            $filename = $file->getClientOriginalName();
            $destinationPath = 'uploads/';

            $file->move($destinationPath, $filename);
        }
        $t_type=$request->input('t_type');

        $i=DB::insert("INSERT INTO `videos`(`track_name`, `singer_name`, `label_name`, `description`, `track_type`, `isActive`, `trending`, `trending_seq`, `track_poster`,video_url)VALUES ('".$name."','".$s_name."','".$l_name."','".$des."','".$t_type."',1,1,1,'".$filename."','".$v_url."')");
        $id = DB::table('videos')->max('video_id');
        return $id;
    }
    public function insertMovie_src(Request $request){
        $name = $request->input('t_name');
        $s_name = $request->input('s_name');
        $l_name = $request->input('l_name');
        $des = $request->input('des');
        //$lyric = $request->input('lyrics');
        $v_url = $request->input('video_url');
        $filename ="none";
        if($request->hasFile('pt_image')) {
            $file = $request->file('pt_image');
            $filename = $file->getClientOriginalName();
            $destinationPath = 'uploads/';

            $file->move($destinationPath, $filename);
        }
        $t_type=$request->input('t_type');

        $i=DB::insert("INSERT INTO `movies`(`track_name`, `singer_name`, `label_name`, `description`, `track_type`, `isActive`, `trending`, `trending_seq`, `track_poster`,video_url)VALUES ('".$name."','".$s_name."','".$l_name."','".$des."','".$t_type."',1,1,1,'".$filename."','".$v_url."')");
        $id = DB::table('videos')->max('video_id');
        return $id;

}

}
