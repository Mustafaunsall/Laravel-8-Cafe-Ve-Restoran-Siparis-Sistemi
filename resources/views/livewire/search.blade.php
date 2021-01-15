<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

    <input wire:model="search" name="search" type="text" class="input search-iput" list="mylist" placeholder="Search product.."/>

    @if(!empty($query))
        <datalist id="mylist">

            @foreach($datalist as $rs)

                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach

        </datalist>

    @endif

</div>
