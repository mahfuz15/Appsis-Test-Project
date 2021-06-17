@extends('templates.app')
@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form action="/update/{{$old_item->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card text-white bg-dark shadow p-3 mb-5">
              <h3 class="card-header">Item Edit Form</h3>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="my-3">
                      <label for="parent_id" class="form-label">Parent Item</label>
                      <select class="form-select" name="parent_id">
                        <option value="0">Select Parent Item</option>
                        @if(isset($items))
                          @foreach($items as $item)
                              <option value="{{$item->id}}" {{($old_item->parent_id == $item->id)?'selected':''}}>{{$item->name}}</option>
                              @foreach($item->childItems as $childItem)
                                  @include('templates.option', ['child_item' => $childItem, 'dash' => ' - - ', 'old_parent_id' => $old_item->parent_id])
                              @endforeach
                          @endforeach
                        @endif
                      </select>
                    </div>
                    <div class="my-3">
                      <label for="name" class="form-label">Item Name</label>
                      <input type="text" class="form-control" id="item_name" name="name" value="{{$old_item->name}}" placeholder="Item Name">
                      @error('name')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class="my-3 d-grid gap-2">
                      <br/>
                      <button class="btn btn-warning btn-block" type="submit">Update Item</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection