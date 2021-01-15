<ul class="dropdown-menu">
    @foreach($children as $subcategory)

        @if(count($subcategory->children))

            <li>{{$subcategory->title}}<span class="caret-right"></span></li>


            <ul class="dropdown">
                @include('home._categorytree',['children'=>$subcategory->children])

            </ul>


        @else
            <li><a href="{{route('categoryproducts',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
        @endif

    @endforeach
</ul>




