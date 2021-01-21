<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class ShopcartController extends Controller
{
    public static function countshopcart(){  //Her yerden çağırabiliyoruz

        return Shopcart::where('user_id',Auth::id())->count();
    }
    public static function shopcart(){  //Her yerden çağırabiliyoruz


        return Shopcart::where('user_id',Auth::id())->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Shopcart::where('user_id',Auth::id())->get();
        return view('home.user_shopcart',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data = Shopcart::where('product_id',$id)->where('user_id',Auth::id())->first();
        if ($data){
            $data->quantity+=$request->input('quantity');
        }else{
            $data=new Shopcart;

            $data->user_id =Auth::id();
            $data->product_id =$id;
            $data->quantity = $request->input('quantity');
        }




        $data->save();

        return redirect()->back()->with('success','ürün sepete eklendi');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopcart $shopcart,$id)
    {
        $data = Shopcart::find($id);
        $data->quantity = $request->input('quantity');

        $data->save();

        return redirect()->back()->with('success','ürün adedi değiştirildi.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        $data = Shopcart::find($id);
        $data->delete();
        return redirect()->back()->with('success','Sepetteki ürün silindi');
    }
}
