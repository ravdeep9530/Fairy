<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
try {
    Route::get('/indexpart','userGetController@getTracks');

    Route::get('/admin', function () {
        return view('pages/login');
    });
    Route::get('/manage','userGetController@getadminDash');


    Route::get('/addTrack', function () {
        return view('pages/addTrack');
    });
    Route::get('/movie', function () {
        return view('pages/movie');
    });
    Route::get('/live','userGetController@getLive');
    Route::get('/record', function () {
        return view('recordLabel');
    });
    Route::get('/addBanner','userGetController@getBanner');
    Route::get('/addVideos', function () {
        return view('pages/addVideos');
    });
    Route::get('/t', function () {
        return "sss";
    });
    Route::post('/insertTrackt', function () {

        return "s";
    });
    Route::get('/', function () {

        return view('index');
    });
    Route::get('/single/{id}','userGetController@getsingeltrack');
    Route::get('/mov/{id}','userGetController@getsingelmovie');
    Route::get('/video/{id}','userGetController@getsingelvideo');
    Route::post('/getFBComment','userGetController@getfbComment');
    Route::get('/radio/{id}','userGetController@getAllTracks');
    Route::get('/getTrackUrl/{id}','userGetController@getTrackUrl');
    Route::get('updateBanner/{id}/{status}','userInsertController@updateBanner');
    Route::get('updateT/{id}/{status}','userInsertController@updateT');
    Route::get('deleteLive/{id}','userInsertController@deleteLive');
    Route::get('updateV/{id}/{status}','userInsertController@updateV');
    Route::get('updateM/{id}/{status}','userInsertController@updateM');
    Route::get('/allvideos','userGetController@getAllVideos');
    Route::get('/allMovies','userGetController@getAllMovies');
    Route::get('/getTab','userGetController@getTab');
    Route::get('/getVTab','userGetController@getVTab');
    Route::get('/getCTab','userGetController@getCTab');
    Route::get('/getMTab','userGetController@getMTab');
    Route::get('/contactus', function ()
    {
        return view('contactus');
    });
    Route::get('/unsetShare','userGetController@unsetShare');
    Route::get('/share/{page}/{id}','userGetController@share');


    Route::get('insert', 'userInsertController@insert');
    Route::get('changepassword/{pass}/{id}', 'userInsertController@changePassword');
    Route::post('proposal', 'userInsertController@insertProposal');
    Route::post('labels', 'userInsertController@insertLabel');
    Route::get('tracks', 'userGetController@getTracks');
    Route::get('showRequests', 'userGetController@showRequests');
    Route::get('showCRequests', 'userGetController@showCRequests');
    Route::get('showPRequests', 'userGetController@showPRequests');
    Route::get('showLRequests', 'userGetController@showLRequests');
    Route::post('create', 'userInsertController@insert');
    Route::post('insertLive', 'userInsertController@insertLive');
    Route::post('contact', 'userInsertController@insertContact');
    Route::get('createFB/{id}/{email}', 'userInsertController@insertFB');
    Route::post('createCheckLogin', 'userGetController@createCheckLogin');
    Route::post('thirdPartyLogin', 'userGetController@thirdPartyLogin');
    Route::get('delT/{id}', 'userInsertController@delT');
    Route::get('delC/{id}', 'userInsertController@delC');
    Route::get('delV/{id}', 'userInsertController@delV');
    Route::get('delM/{id}', 'userInsertController@delM');
    Route::post('banner', 'userInsertController@insertBanner');
    Route::post('insertTrack', 'userInsertController@insertTrack1');
    Route::post('insertTrack_src', 'userInsertController@insertTrack_src1');
    Route::post('insertVideo_src', 'userInsertController@insertVideo_src1');
    Route::post('insertMovie_src', 'userInsertController@insertMovie_src');
    Route::post('login', 'userGetController@getAll');
    Route::post('adminLogin', 'userGetController@adminGetAll');

    Route::get('adminLogout', 'userGetController@adminlogout');
    Route::get('login', 'userGetController@logout');

}catch (NotFoundHttpException $e)
{
      return view('404.html');

}