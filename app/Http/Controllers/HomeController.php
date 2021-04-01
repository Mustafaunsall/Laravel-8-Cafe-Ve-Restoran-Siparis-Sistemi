<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Menuwish;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class HomeController extends Controller
{
    public static function countreview($id){  //Her yerden çağırabiliyoruz

        return Review::where('product_id',$id)->where('status','True')->count();
    }
    public static function avrgreview($id){  //Her yerden çağırabiliyoruz

        return Review::where('product_id',$id)->where('status','True')->average('rate');
    }
    public static function footerlastproduct(){  //Her yerden çağırabiliyoruz

        return Product::select('title','image','price','description','id')->limit(2)->orderByDesc('id')->where('status','True')->get();;
    }



    public static function categorylist(){  //Her yerden çağırabiliyoruz

        return Category::where('parent_id','=',0)->with('children')->where('status','True')->get();
    }
    public static function getSetting(){  //Her yerden çağırabiliyoruz

        return Setting::first();
    }

    public function index(){

        $setting=Setting::first(); //dizi halinde getirdiğimizde döngüye gerek yok
        $slider=Product::select('title','image','price','description','id','detail')->limit(6)->where('status','True')->get();
        $daily=Product::select('title','image','price','description','id')->limit(4)->inRandomOrder()->where('status','True')->get();
        $last=Product::select('title','image','price','description','id')->limit(6)->orderByDesc('id')->where('status','True')->get();
        $picked=Product::select('title','image','price','description','id')->limit(6)->inRandomOrder()->where('status','True')->get();
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
    //menu
    public function menu(){
        $data=Product::all();
        $datalist=Category::where('parent_id','=',0)->where('status','True')->get();

        return view('home.menu',['data'=>$data,'datalist'=>$datalist]);
    }
    public function menutile(){
        $data=Product::where('status','True')->get();
        $datalist=Category::where('parent_id','=',0)->where('status','True')->get();

        return view('home.menutile',['data'=>$data,'datalist'=>$datalist]);
    }
    public function menuwish()
    {
        $datalist = User::where('id',Auth::id())->get();
        return view('home.menuwishcreate',['datalist' => $datalist]);
    }
    public function menuwishcreate(Request $request){
            $data = new Menuwish();
            $data->table_no = $request->table_no;
            $data->name = $request->input('name');
            $data->user_id = Auth::id();
            $data->status = 'New';
            $data->phone = $request->input('phone');
            $data->email = $request->input('email');

        $data->save();

        return redirect()->route('menuwishshow')->with('success','Menü İsteği Gönderildi.');
    }
    public function menuwishshow()
    {
        $datalist = Menuwish::where('user_id',Auth::id())->get();
        return view('home.user_menuwish',['datalist' => $datalist]);
    }

    //aboutus
    public function aboutus(){

        return view('home.about');
    }

    public function contact(){

        return view('home.contact');
    }
    public function product($id){
         $data=Product::find($id);
         $list=Image::where('product_id',$id)->get();
        $reviews=Review::where('product_id',$id)->where('status','True')->get();
         //print_r($data->title);
         //exit();
        return view('home.product_detail',['data'=>$data,'list'=>$list,'reviews'=>$reviews]);
    }
    //category list
    public function categoryproducts($id){
        $datalist=Product::where('category_id',$id)->where('status','True')->get();
        $data=Category::find($id);
        $list=Category::where('parent_id','=',0)->with('children')->where('status','True')->get();

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

        $count=Product::where('title','like','%'.$search.'%')->where('status','True')->get()->count();
        if ($count==1) {

            $data = Product::where('title','like','%'.$search.'%')->where('status','True')->first();
            return redirect()->route('product', ['id' => $data->id]);
        }
        else{
            return redirect()->route('productlist', ['search' => $search]);

        }
    }
    public function productlist($search){
        $datalist = Product::where('title','like','%'.$search.'%')->where('status','True')->get();
        $list=Category::where('parent_id','=',0)->with('children')->where('status','True')->get();
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
        $datalist=Faq::all()->sortBy('position');
        return view('home.fag',['datalist'=>$datalist]);
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
