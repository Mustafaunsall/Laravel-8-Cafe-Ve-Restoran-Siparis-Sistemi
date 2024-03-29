<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Review extends Component
{
    public $record, $subject, $review, $product_id, $rate;

    public function mount($id)
    {
        $this->record = Product::findOrFail($id);
        $this->product_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }
    //formun action kısmı
    private function resetInput()
    {

        $this->subject = null;
        $this->review = null;
        $this->rate = null;
        $this->product_id = null;
        $this->IP = null;
    }

    public function store()
    {   //sınır hata mesaj yönetim
        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',
            'rate' => 'required'
        ]);

        \App\Models\Review::create([
            'product_id' =>$this->product_id,
                'user_id'=>Auth::id(),
          'IP'=>$_SERVER['REMOTE_ADDR'],
          'rate' =>$this->rate,
          'subject'=>$this->subject,
          'review'=>$this->review
      ]);

      session()->flash('message', 'Revire Send Succesfully');
      $this->resetInput();

    }
}
