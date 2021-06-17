@extends('templates.app')
@section('content')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card text-white bg-dark shadow p-3 mb-5">
            <h3 class="card-header">Item Details</h3>
            <div class="card-body">
              <div class="row">
                <div class="col">
                <table class="table text-white">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Item Name</th>
                      <th scope="col">Parent</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>{{$item->name}}</td>
                      <td>{{isset($item->parent()->name)?$item->parent()->name:'None'}}</td>
                      <td>
                        <form action="/delete/{{$item->id}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <a href="/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection