<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\DB;
use App\Post;


Route::get('/', function () {
    return view('welcome');
});
//Route::get('/about', function () {
//    return "About";
//});
//Route::get('/contact', function () {
//    return "Contact";
//});
//
//Route::get('/post/{id}/{name}',function($id,$name){
//    return "This is Posts ".$id." This is Name".$name;
//});
//
//Route::get('admin/post/example',array('as'=>'admin.home',function(){
//
//    $url=route('admin.home');
//
//    return "This URL is = ".$url;
//
//}));

//Route::get('/posts/{id}','PostsController@index');



//Route::resource('/posts','PostsController');
//Route ::get('posts/{id}/{name}/{password}','PostsController@show_post');
//Route::get('contact/','PostsController@create');

//////// DataBase Raw Queries


 Route::get('/insert',function (){

     DB::insert('insert into posts(title,context) values(?,?)',['PHP CodeIgnitor','CodeIgnitor is the Best Thing']);





 });


//Route::get('/read',function (){
//
//  $result = DB::select('select * from posts where id=?',[1]);
//
////  foreach ($result as $post)
////  {
////    return $post->title;
////  }
//
////        return $result;
//
//
//    return var_dump($result);
//
//
//});



//Route::get('/update',function (){
//
//   $update = DB::update('update posts set title="Updated Title" where id=?',[1]);
//
//   return $update ;
//});


//Route::get('/delete',function(){
//
//    $delete  = DB::delete('delete from posts where id = ?',[1]);
//    return $delete;
//
//});

///////
/////////// Eloquent
///////

//Route::get('/read',function(){
//
//$posts=Post::all();
//
//    foreach ($posts as $post)
//    {
//        return $post->title;
//    }
//
//
//});

//Route::get('/find',function(){
//
//$posts=Post::find(2);
//
////    foreach ($posts as $post)
////    {
////        return $post->title;
////    }
//    return $posts->title;
//
//});

//Route::get('/findwhere',function(){
//
//    $posts=Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//
//    return $posts;
//
//});


//Route::get('/findmore',function(){
////
////    $posts=Post::findOrfail(1);
////
////    return $posts;
//
//
//    $posts=Post::where('user_count','<','50')->firstOrFail();
//
//    return $posts;
//
//
//
//});

//Route::get('/basicinsert',function(){
//
//    $post = new Post();
//
//    $post->title = 'New Eloquent title insert';
//    $post->context = 'Wow look at this';
//    $post->save();
//});

//Route::get('/basicinsert2',function(){
//
//    $post = Post::find(2);
//
//    $post->title = 'New Eloquent title insert 2';
//    $post->context = 'Wow look at this 2';
//    $post->save();
//});

Route::get('/create',function(){

    Post::create(['title'=>'the created method','context'=>'Pagal ho gia ma yr']);

});




















