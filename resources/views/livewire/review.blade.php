<div>
    {{-- The best athlete wants his opponent at his best. --}}
    @if(session()->has('message'))   {{--mesaj kaydedildi mesajı --}}
        <div class="alert alert-success alert-block">
              {{session('message')}}
        </div>
    @endif


                                        {{--action kısmı--}}
    <form id="form" class="review-form" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <input wire:model="subject" class="input-md form-control" placeholder="Subject" maxlength="100" required="" type="text">
                @error('subject')<span class="text-danger">{{$message}}</span>@enderror
            </div>

        </div>
        <span>Your Ratings</span>
        <div class="clearfix"></div>
        @error('rate')<span class="text-danger">{{$message}}</span>@enderror
        <div class="rating3">

            <input type="radio" id="star5" wire:model="rate" value="5"  ><span>&#9734;</span>
            <input type="radio" id="star4" wire:model="rate" value="4" ><span >&#9734;</span>
            <input type="radio" id="star3" wire:model="rate" value="3" > <span>&#9734;</span>
            <input type="radio" id="star2" wire:model="rate" value="2" > <span>&#9734;</span>
            <input type="radio" id="star1" wire:model="rate" value="1" > <span>&#9734;</span>
        </div>
        <div class="clearfix space20"></div>
        <textarea wire:model="review" id="text" class="input-md form-control" rows="6" placeholder="Add review.." maxlength="400"></textarea>
        @error('review')<span class="text-danger">{{$message}}</span>@enderror
        <br>
        @auth
             <button type="submit" class="btn btn-default">Save</button>
        @else
            <a href="/login" class="btn btn-default">For Submit Review Please Login</a>
        @endauth
    </form>


</div>
