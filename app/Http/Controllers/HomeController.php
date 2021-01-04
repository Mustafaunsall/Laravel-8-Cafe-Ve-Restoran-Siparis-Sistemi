<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public function index(){

       return view('home.index'); //viewe yönlendiriyoruz

    }
    public function login(){

        return view('admin.login'); //viewe yönlendiriyoruz


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
