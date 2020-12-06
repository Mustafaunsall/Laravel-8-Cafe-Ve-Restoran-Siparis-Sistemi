<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

       return view('home.index'); //viewe yönlendiriyoruz

    }

    public function test($id,$name){  //routedan gelen parametreleri alıyoruz
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data/*data ile aynı şeyi yapıyor['id'=>$id,'name'=>$name]*/); //viewe parametrelerle yönlendiriyoruz data ile daha anlaşılır oluyor göndermesi
        /*
      echo "Id number:".$id."<br>"."name:".$name;
        */
    }
}
