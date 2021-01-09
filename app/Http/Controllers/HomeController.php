<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public static function getSetting(){  //Her yerden çağırabiliyoruz

        return Setting::first();


    }

    public function index(){

        $setting=Setting::first(); //dizi halinde geirdiğimizde döngüye gerek yok
       return view('home.index',['setting'=>$setting]);

    }
    public function login(){
        $setting=Setting::first();
        return view('admin.login',['setting'=>$setting]); //viewe yönlendiriyoruz
    }
    public function aboutus(){

        return view('home.about');
    }
    public function contact(){

        return view('home.contact');
    }
    public function fag(){

        return view('home.fag');
    }
    public function refrences(){

        return view('home.refrences');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }else{
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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
