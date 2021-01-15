<!--category  -->
@php

    $parentCategories=\App\Http\Controllers\HomeController::categorylist()
@endphp
<ul class="dropdown-menu">
    @foreach($parentCategories as $rs)
        <li>
            <a href="{{route('categoryproducts',['id'=>$rs->id])}}">{{$rs->title}}<span
                    class="caret-right"></span></a>
            @if(count($rs->children))
                @include('home._categorytree',['children'=>$rs->children])
            @endif

        </li>
    @endforeach
</ul>



