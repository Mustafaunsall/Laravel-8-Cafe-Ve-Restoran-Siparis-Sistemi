<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $search='';

    public function render()
    {                                     #başında ve sonunda benzer olanları
        $datalist=Product::where('title','like','%'.$this->search.'%')->where('status','True')->get();

        return view('livewire.search',['datalist'=>$datalist,'query'=>$this->search]);
    }                                                               #boş olup olmaması
            #eski   return view('livewire.search');
}
