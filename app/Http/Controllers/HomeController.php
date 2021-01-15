<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class HomeController extends Controller
{
    public static function categorylist(){  //Her yerden çağırabiliyoruz

        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getSetting(){  //Her yerden çağırabiliyoruz

        return Setting::first();
    }

    public function index(){

        $setting=Setting::first(); //dizi halinde geirdiğimizde döngüye gerek yok
        $slider=Product::select('title','image','price','description','id','detail')->limit(6)->get();
        $daily=Product::select('title','image','price','description','id')->limit(4)->inRandomOrder()->get();
        $last=Product::select('title','image','price','description','id')->limit(6)->orderByDesc('id')->get();
        $picked=Product::select('title','image','price','description','id')->limit(6)->inRandomOrder()->get();
        //print_r($daily);
        //exit();
        $data=['setting'=>$setting,
               'slider'=>$slider,
                'daily'=>$daily,
                'last'=>$last,
                'picked'=>$picked,
                 ];
       return view('home.index',$data);

    }
    //login
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
    public function product($id){
         $data=Product::find($id);
         $list=Image::where('product_id',$id)->get();
         //print_r($data->title);
         //exit();
        return view('home.product_detail',['data'=>$data,'list'=>$list]);
    }
    //category list
    public function categoryproducts($id){
        $datalist=Product::where('category_id',$id)->get();
        $data=Category::find($id);
        $list=Category::where('parent_id','=',0)->with('children')->get();

        //print_r($data);
       // exit();
        return view('home.category_products',['datalist'=>$datalist,'data'=>$data,'list'=>$list]);
    }



    public function addtocart($id){
        $data=Product::find($id);
        print_r($data);
        exit();

    }

    //search
    public function getproduct(Request $request){

        $search=$request->input('search');

        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1) {

            $data = Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product', ['id' => $data->id]);
        }
        else{
            return redirect()->route('productlist', ['search' => $search]);

        }
    }
    public function productlist($search){
        $datalist = Product::where('title','like','%'.$search.'%')->get();
        $list=Category::where('parent_id','=',0)->with('children')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist,'list'=>$list]);

    }



    //contact message kaydetme
    public function sendmessage(Request $request){

        $data=new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->status ='New';
         $data->ip = $request->ip();


        $data->save();

        return redirect()->route('contact')->with('success','Mesaj Kaydedildi Teşşekkürler');

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
