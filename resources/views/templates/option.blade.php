<option value="{{$child_item->id}}" {{($old_parent_id == $child_item->id)?'selected':''}}> {{ $dash.$child_item->name}}</option>
@if($child_item->childs)
    @foreach($child_item->childs as $childItem)
        @include('templates.option', ['child_item' => $childItem, 'dash' => $dash.' - - ', 'old_parent_id' => $old_parent_id])
    @endforeach
@endif