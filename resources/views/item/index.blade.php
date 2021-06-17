@extends('templates.app')
@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card text-white bg-dark shadow p-3 mb-5">
            <div class="card-header d-block">
              <div class="row">
                <div class="col">
                  <h4>All Items</h4>
                </div>
                <div class="col d-flex flex-row-reverse">
                  <a href="/create" class="btn btn-warning">Create Item</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <ul class="">
                  @forelse($items as $item)
                      <li><a href="/show/{{$item->id}}">{{$item->name}}</a></li>
                      @foreach($item->childItems as $childItem)
                          @include('templates.list', ['child_item' => $childItem])
                      @endforeach
                  @empty
                    <p>No Item Found!</p>
                  @endforelse
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection