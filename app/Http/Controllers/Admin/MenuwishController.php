<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menuwish;
use Illuminate\Http\Request;

class MenuwishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Menuwish::all();
        return view('admin.menuwish',['datalist' => $datalist]);
    }
    public function list($status)
    {
        $datalist = Menuwish::where('status',$status)->get();
        return view('admin.menuwish',['datalist' => $datalist]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menuwish  $menuwish
     * @return \Illuminate\Http\Response
     */
    public function show(Menuwish $menuwish,$id)
    {
        $data= Menuwish::find($id);


        return  view('admin.menuwish_detail',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menuwish  $menuwish
     * @return \Illuminate\Http\Response
     */
    public function edit(Menuwish $menuwish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menuwish  $menuwish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menuwish $menuwish,$id)
    {
        $data= Menuwish::find($id);
        $data->status = $request->input('status');

        $data->save();

        return redirect()->back()->with('success','Menuwish Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menuwish  $menuwish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menuwish $menuwish)
    {
        //
    }
}
