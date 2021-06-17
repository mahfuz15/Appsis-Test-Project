<ul class="flex-wrap">
    <li>
        <a href="/show/{{$child_item->id}}">{{ $child_item->name}}</a>
        @if($child_item->childs)
            @foreach($child_item->childs as $childItem)
                @include('templates.list', ['child_item' => $childItem])
            @endforeach
        @endif
    </li>
</ul>