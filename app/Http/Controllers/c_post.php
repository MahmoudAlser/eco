<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\post;
use DB;
use App\category;

class c_post extends Controller

{
    //
    public function showpost(){

        $posts=Post::paginate(3);   
  
 
        return view("posts", compact("posts"));
 
  

}
public function post(post $post){
/*$posts=post::all();
    $post=DB::table('posts')->find($id);
*/

    return view("post", compact("post"));



}
public function addpost(){
    $categorys=category::all();
    return view("addpost",compact("categorys"));


}

public function insertpost(Request $request){
    request()->validate([
        'title'=>"required|min:4",
        'content'=>"required|min:10",
        'img'=>"image|mimes:jpg,gif,jpeg,png|max:2048",
        
    ],
    [
"title.required"=>"خطا يجب ان لايترك العنوان فارغ",
"title.min"=>"اقل شي للعنوان 4  حروف",
"content.required"=>"خطا يجب ان لايترك محتوي البوست فارغ",
"content.min"=>"اقل شي 10 حروف"
    ]

);

  

$imgn = time().'.'.request()->img->getClientOriginalExtension();
$addpost =new Post;
$addpost ->p_title =request('title');
$addpost ->p_content =request('content');
$addpost ->post_cat =request('catid');
$addpost ->post_user =request('userid');
$addpost ->name =request('name');
$addpost ->img =($imgn);
$addpost ->time =request('time');
$addpost ->phone =request('phone');

$addpost->save();
request()->img->move(public_path('img'), $imgn);

return redirect("/posts");
}

}