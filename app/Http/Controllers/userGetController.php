<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use League\Flysystem\Exception;
@include('flash::message');
class userGetController extends Controller
{
    public function getAll(Request $request)
    {
        try {
              $email = $request->input('email');
        $pass = $request->input('pass');

       // $pass=Hash::check($pass);
        echo $pass;
        $pdata = DB::table('users')->where('email', '=', "$email")->value('password');

        $t = Hash::check($pass, $pdata);
        if ($t == 1) {
            $pdata = DB::table('users')->where('email', '=', "$email")->get();
            $request->session()->put('info', $pdata);
            return redirect('/');
        }else{
            return redirect('/')->withErrors(['errorM'=>'Email and Password is not correct!!!']);
        }
        }catch (Exception $ex)
        {
            return redirect('/');
        }
    }
    public function thirdPartyLogin(Request $request)
    {
        $email = $request->input('email');
        $pdata = DB::table('users')->where('email', '=', "$email")->get();
        $request->session()->put('info', $pdata);
        return redirect('/');

    }
    public function share(Request $request,$page,$id)
    {

        $request->session()->put('url',$page.'/'.$id);
        return redirect('/');

    }
    public function createCheckLogin(Request $request)
    {
        try {
            $email = $request->input('email');
            $pass = $request->input('pass');
        $pdata = DB::table('users')->where('email', '=', "$email")->value('password');

        $t = Hash::check($pass, $pdata);
        if ($t == 1) {
           // $pdata = DB::table('users')->where('email', '=', "$email")->get();
           // $request->session()->put('info', $pdata);

            $pdata = DB::table('users')->where('email', '=', "$email")->get();
            $request->session()->put('info', $pdata);

            return "Yes";
        }else{
            return "No";
        }
        }catch (Exception $ex)
        {
            return redirect('/');
        }
    }
    public function adminGetAll(Request $request)
    {
        try {
            $email = $request->input('email');
            $pass = $request->input('pass');

            // $pass=Hash::check($pass);
            echo $pass;
            $pdata = DB::table('users')->where('email', '=', "$email")->where('role','=','admin')->value('password');

            $t = Hash::check($pass, $pdata);
            if ($t == 1) {
                $pdata = DB::table('users')->where('email', '=', "$email")->get();
                $request->session()->put('info', $pdata);
                return redirect('/manage');
            }
            else{
                return redirect('/admin')->withErrors(['errorM'=>'Email and Password is not correct!!!']);
            }
        }catch (Exception $ex)
        {
            return redirect('/admin')->withErrors('errorM','Email and Password is not correct!!!');;
        }
    }

    public  function getTracks(Request $request)
    {
       $vdata = DB::table('videos')->select('*')->where('isActive','=','1')->orderBy('video_id','desc')->take(20)->get();

        $mdata = DB::table('movies')->select('*')->where('isActive','=','1')->orderBy('movie_id','desc')->take(20)->get();

        $tdata = DB::table('Tracks')->select('*')->where('isActive','=','1')->orderBy('track_id','desc')->take(20)->get();

        $bdata = DB::table('banner')->select('*')->where('isActive','=','1')->orderBy('banner_id','desc')->take(5)->get();

        $ldata = DB::table('live')->select('*')->orderBy('live_id','desc')->take(1)->get();


        return view('index_part')->with('tracks',$tdata)->with('vid',$vdata)->with('banners',$bdata)->with('live',$ldata)->with('movies',$mdata);

    }
    public  function getTrackUrl(Request $request,$id)
    {
       $tdata = DB::table('wavtrack')->select('*')->where('track_id','=',$id)->take(1)->get();
$ar=json_decode($tdata,true);

        return $ar[0]['w_path'];

    }
    public  function getAllTracks(Request $request,$id)
    {

        $ptdata = DB::table('Tracks')->select('*')->where('track_type','=','Pop')->where('isActive','=',1)->get();
        $jtdata = DB::table('Tracks')->select('*')->where('track_type','=','Jaz')->where('isActive','=','1')->get();
        $rtdata = DB::table('Tracks')->select('*')->where('track_type','=','Rock')->where('isActive','=','1')->get();
        $ftdata = DB::table('Tracks')->select('*')->where('track_type','=','Folk')->where('isActive','=','1')->get();
        $dtdata = DB::table('Tracks')->select('*')->where('track_type','=','Dharmik')->where('isActive','=','1')->get();
        $btdata = DB::table('Tracks')->select('*')->where('track_type','=','Bhangra')->where('isActive','=','1')->get();
        $stdata = DB::table('Tracks')->select('*')->where('track_type','=','Sad')->where('isActive','=','1')->get();
        $sutdata = DB::table('Tracks')->select('*')->where('track_type','=','Sufi')->where('isActive','=','1')->get();
        $ranutdata = DB::table('Tracks')->select('*')->take(20)->get();

        return view('radio')->with('ptracks',$ptdata)->with('jtracks',$jtdata)->with('rtracks',$rtdata)->with('ftracks',$ftdata)
            ->with('btracks',$btdata)->with('stracks',$stdata)->with('sutracks',$sutdata)->with('rantracks',$ranutdata)->with('dhartracks',$dtdata);

    }
    public  function getAllVideos(Request $request)
    {

        $ptdata = DB::table('videos')->select('*')->where('track_type','=','Pop')->where('isActive','=','1')->get();
        $jtdata = DB::table('videos')->select('*')->where('track_type','=','Jaz')->where('isActive','=','1')->get();
        $rtdata = DB::table('videos')->select('*')->where('track_type','=','Rock')->where('isActive','=','1')->get();
        $ftdata = DB::table('videos')->select('*')->where('track_type','=','Folk')->where('isActive','=','1')->get();
        $btdata = DB::table('videos')->select('*')->where('track_type','=','Bhangra')->where('isActive','=','1')->get();
        $stdata = DB::table('videos')->select('*')->where('track_type','=','Sad')->where('isActive','=','1')->get();
        $sutdata = DB::table('videos')->select('*')->where('track_type','=','Sufi')->where('isActive','=','1')->get();
        $ranutdata = DB::table('videos')->select('*')->take(20)->get();

        return view('allvideos')->with('ptracks',$ptdata)->with('jtracks',$jtdata)->with('rtracks',$rtdata)->with('ftracks',$ftdata)
            ->with('btracks',$btdata)->with('stracks',$stdata)->with('sutracks',$sutdata)->with('rantracks',$ranutdata);

    }public  function getAllMovies(Request $request)
    {

        $ptdata = DB::table('movies')->select('*')->where('track_type','=','Pop')->where('isActive','=','1')->get();
        $jtdata = DB::table('movies')->select('*')->where('track_type','=','Jaz')->where('isActive','=','1')->get();
        $rtdata = DB::table('movies')->select('*')->where('track_type','=','Rock')->where('isActive','=','1')->get();
        $ftdata = DB::table('movies')->select('*')->where('track_type','=','Folk')->where('isActive','=','1')->get();
        $btdata = DB::table('movies')->select('*')->where('track_type','=','Bhangra')->where('isActive','=','1')->get();
        $stdata = DB::table('movies')->select('*')->where('track_type','=','Sad')->where('isActive','=','1')->get();
        $sutdata = DB::table('movies')->select('*')->where('track_type','=','Sufi')->where('isActive','=','1')->get();
        $ranutdata = DB::table('movies')->select('*')->take(20)->get();

        return view('allMovies')->with('ptracks',$ptdata)->with('jtracks',$jtdata)->with('rtracks',$rtdata)->with('ftracks',$ftdata)
            ->with('btracks',$btdata)->with('stracks',$stdata)->with('sutracks',$sutdata)->with('rantracks',$ranutdata);

    }
    public  function getsingeltrack(Request $request,$id)
    {
        $tdata = DB::table('Tracks')->select('*')->where('track_id','=',$id)->get();
        $ttdata=json_decode($tdata,true);
        $tsrcdata = DB::table('Tracks_source')->select('*')->where('track_id','=',$id)->get();
        //  echo $tdata;
        $tdata1 = DB::table('Tracks')->select('*')->where('track_type','=',$ttdata[0]['track_type'])->get();

        return view('single')->with('tracks',($tdata))->with('tracksrc',$tsrcdata)->with("ptracks",$tdata1);

    }

    public  function getsingelvideo(Request $request,$id)
    {
        $tdata = DB::table('videos')->select('*')->where('video_id','=',$id)->where('isActive','=','1')->get();
        $ttdata=json_decode($tdata,true);

        $pdata = DB::table('videos')->select('*')->where('track_type','=',$ttdata[0]['track_type'])->where('isActive','=','1')->get();


        return view('singlevideo')->with('tracks',($tdata))->with('vtracks',($pdata));

    }
    public  function getsingelmovie(Request $request,$id)
    {
        $tdata = DB::table('movies')->select('*')->where('movie_id','=',$id)->where('isActive','=','1')->get();
        $ttdata=json_decode($tdata,true);

        $pdata = DB::table('movies')->select('*')->where('track_type','=',$ttdata[0]['track_type'])->where('isActive','=','1')->get();


        return view('singlemov')->with('tracks',($tdata))->with('vtracks',($pdata));

    }
    public  function getBanner(Request $request)
    {
        $tdata = DB::table('banner')->select('*')->orderBy('banner_id','desc')->where('isActive','=','1')->get();




        return view('pages.addBanner')->with('banners',($tdata));

    }
    public  function getLive(Request $request)
    {
        $tdata = DB::table('live')->select('*')->orderBy('live_id','desc')->get();




        return view('pages.live')->with('live',($tdata));

    }
    public  function getadminDash(Request $request)
    {
        $tdata = DB::table('Tracks')->where('isActive','=','1')->count();
        $vdata = DB::table('videos')->where('isActive','=','1')->count();
        $bdata = DB::table('movies')->where('isActive','=','1')->count();
        $udata = DB::table('users')->count();

        $c=json_decode($tdata,true);
        $v=json_decode($vdata,true);
        $u=json_decode($udata,true);
        $b=json_decode($bdata,true);
        $tdata = DB::table('Tracks')->select('*')->get();




        return view('pages.index')->with('tcount',($c))->with('vcount',($v))->with('ucount',($u))->with('bcount',($b))->with('tdata',($tdata));

    }public  function getfbComment(Request $request)
    {
        $url = $request->input('url');

        return view('fbComment')->with('url',$url);

    }

    public function getTab(Request $request)
    {
        $tdata = DB::table('Tracks')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#Track ID</th>
                                                    <th>Track Name</th>
                                                    <th>Singer Name</th>
                                                    <th>Label Name</th>
                                                    <th>Lyrics</th>
                                                    <th>Track Poster</th>
                                                    <th>Is Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->track_id.'</td>
                                                    <td>'.$row->track_name.'</td>
                                                    <td>'.$row->singer_name.'</td>
                                                    <td>'.$row->label_name.'</td>
                                                    <td><textarea readonly>'.$row->track_lyrics.'</textarea></td>
                                                    <td><img src="uploads/'.$row->track_poster.'" width="50px" class="img-responsive"></td>
                                                    <td><select onchange="changeT(this,'.$row->track_id.')" class="" id="'.$row->track_id.'">
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>';
if($row->isActive==0) {

    $s .= '<script>
                                                            document.getElementById(' . $row->track_id . ').value=0;
                                                        </script>';

}
                                                   $s.='</td><td><button class="btn btn-sm btn-success" onclick="delT('.$row->track_id.')">Delete</button></td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }

    public function showRequests(Request $request)
    {
        return view('pages.requests');
    }
    public function showCRequests(Request $request)
    {
        $tdata = DB::table('ContactUS')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Full Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Message</th>
                                                    <th>Time</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->c_id.'</td>
                                                    <td>'.$row->full_name.'</td>
                                                    <td>'.$row->mob.'</td>
                                                   
                                                    <td><textarea readonly>'.$row->description.'</textarea></td>
 ';
                                                   $s.='<td>'.$row->timestamp.'</td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }

    public function showPRequests(Request $request)
    {
        $tdata = DB::table('proposal')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                   
                                                    <th>Time</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->pid.'</td>
                                                    <td>'.$row->email.'</td>
                                                    <td>'.$row->mobile.'</td>
                                                   
 ';
                                                   $s.='<td>'.$row->modifiedDate.'</td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }
    public function showLRequests(Request $request)
    {
        $tdata = DB::table('Labels')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                   
                                                    <th>Time</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->pid.'</td>
                                                    <td>'.$row->full_name.'</td>
                                                    <td>'.$row->email.'</td>
                                                    <td>'.$row->mobile.'</td>
                                                   
 ';
                                                   $s.='<td>'.$row->modifiedDate.'</td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }
    public function getVTab(Request $request)
    {
        $tdata = DB::table('videos')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#Video ID</th>
                                                    <th>Video Name</th>
                                                    <th>Artist Name</th>
                                                    <th>Label Name</th>
                                                    <th>Video</th>
                                                    <th>Track Poster</th>
                                                    <th>Is Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->video_id.'</td>
                                                    <td>'.$row->track_name.'</td>
                                                    <td>'.$row->singer_name.'</td>
                                                    <td>'.$row->label_name.'</td>
                                                    <td>'.$row->video_url.'</td>
                                                    <td><img src="uploads/'.$row->track_poster.'" width="50px" class="img-responsive"></td>
                                                    <td><select onchange="changeV(this,'.$row->video_id.')" class="" id="'.$row->video_id.'">
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>';
if($row->isActive==0) {

    $s .= '<script>
                                                            document.getElementById(' . $row->video_id. ').value=0;
                                                        </script>';

}
                                                   $s.='</td><td><button class="btn btn-sm btn-success" onclick="delV('.$row->video_id.')">Delete</button></td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }

    public function getMTab(Request $request)
    {
        $tdata = DB::table('movies')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#Movie ID</th>
                                                    <th>Movie Name</th>
                                                    <th>Casting</th>
                                                    <th>Label Name</th>
                                                    <th>Movie</th>
                                                    <th>Poster</th>
                                                    <th>Is Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->movie_id.'</td>
                                                    <td>'.$row->track_name.'</td>
                                                    <td>'.$row->singer_name.'</td>
                                                    <td>'.$row->label_name.'</td>
                                                    <td>'.$row->video_url.'</td>
                                                    <td><img src="uploads/'.$row->track_poster.'" width="50px" class="img-responsive"></td>
                                                    <td><select onchange="changeM(this,'.$row->movie_id.')" class="" id="'.$row->movie_id.'">
                                                            <option value="1" selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>';
            if($row->isActive==0) {

                $s .= '<script>
                                                            document.getElementById(' . $row->movie_id. ').value=0;
                                                        </script>';

            }
            $s.='</td><td><button class="btn btn-sm btn-success" onclick="delM('.$row->movie_id.')">Delete</button></td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }


    public function getCTab(Request $request)
    {
        $tdata = DB::table('users')->select('*')->get();
        $s='<table id="dt" class="table table-striped table-bordered " width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>#User ID</th>
                                                    <th>Full Name</th>
                                                    <th>User Email</th>
                                                    <th>Created Date</th>
                                                    <th>Mobile Number</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>';
        foreach ($tdata as $row)
        {
            $s.=' <tr>
                                                    <td>'.$row->id.'</td>
                                                    <td>'.$row->name.'</td>
                                                    <td>'.$row->email.'</td>
                                                    <td>'.$row->created_at.'</td>
                                                    <td>'.$row->mobile_number.'</td>
                                                    <td>'.$row->role.'</td>  
                                                    <td><button class="btn btn-sm btn-success" onclick="delC('.$row->id.')">Delete</button></td>
                                                </tr>';
        }
        $s.='</table>';
        return $s;
    }


    public function adminlogout(Request $request)
    {
        $request->session()->forget('info');
        return redirect('/admin');
    }
    public function logout(Request $request)
    {
        $request->session()->forget('info');
        return redirect('/');
    }
    public function unsetShare(Request $request)
    {
        $request->session()->forget('url');
        return "share Session Unset";
    }
}
