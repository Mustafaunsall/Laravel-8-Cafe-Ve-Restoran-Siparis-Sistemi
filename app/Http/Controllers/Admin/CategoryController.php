<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    protected $appends=[
        'getParentsTree'
    ];//her yerden erişebilmek için


    //parentları bulma recursife fonk
    public static function getParentsTree($category, $title){  //static fonksiyon olmazsa dışarıdan erişme olmuyor
        if ($category->parent_id==0){

            return $title;
        }
        $parent=Category::find($category->parent_id);//parente getiriyor
        $title=$parent->title . ' > ' . $title; //parent>child şekilde değişkene atıyor

        return  CategoryController::getParentsTree($parent, $title);
    }
    public static function getParent($category, $title){  //static fonksiyon olmazsa dışarıdan erişme olmuyor
        if ($category->parent_id==0){

            return $title;
        }
        $catego=Category::find($category->parent_id);//parente getiriyor
        $title=$catego->title; //parent>child şekilde değişkene atıyor

        return  CategoryController::getParentsTree($catego, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$datalist = DB::select('select *from categories'); //aynı veri çekiyor

        $datalist =Category::with('children')->get();
        return view('admin._category',['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $datalist =Category::with('children')->get();

        return view('admin._category_add',['datalist' => $datalist]);
    }
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //


        DB::table('categories')->insert([
            'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'status' => $request->input('status')


        ]);
        return redirect()->route('admin_category')->with('success','Veri Eklendi');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $data = Category::find($id);
        $datalist =Category::with('children')->get();


       return view('admin._category_edit',['data' => $data,'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Category $category
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category,$id)
    {
        $data = Category::find($id);

            $data->parent_id = $request->input('parent_id');
            $data->title = $request->input('title');
            $data->keywords = $request->input('keywords');
            $data->description = $request->input('description');
            $data->status = $request->input('status');

        $data->save();
        return redirect()->route('admin_category')->with('success','Veri Düzenlendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();
        return redirect()->route('admin_category')->with('success','Kayıt Silindi');

    }
}
