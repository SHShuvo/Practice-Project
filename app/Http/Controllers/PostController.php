<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {   
        $this->validate($request,[
            'title'=>'required | max:191',
            'body'=>'required|max:1500',
            ]);
        $name='';
        if($request->photo !=null){
            $ext=explode('/',explode(';',$request->photo)[0])[1];
            $name=time().'.'.$ext;
            \Image::make($request->photo)->save(public_path('img/post/').$name);
        }    
        return Post::create([
            'title'    =>$request['title'],
            'body'     =>$request['body'],
            'user_id'  =>Auth::guard('admin')->user()->id,
            'photo'    =>$name,
            
        ]);
    }

}
