@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card">
            <div class="card-header">{{ __('Navigate') }}</div>
            <div class="card-body">
                <div class="list-group">
                    <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                    <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Add</a>
                    <a href="{{route('Users.Orders')}}" class="list-group-item list-group-item-action">Users Orders</a>
                    <a href="{{route('Users')}}" class="list-group-item list-group-item-action">Customers</a>
                </div>
            </div>
            </div>
      </div>  
        <div class="col-md-9 ">
            <div class="card">
                <div class="card-header">{{ __('Pizza List') }}
                  <a href="{{route('pizza.create')}}" ><button type="button" class="btn btn-primary" style="float:right">Add New Pizza</button></a>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead class="thead-light table-active">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image </th>
                            <th scope="col">Name</th>
                            <th scope="col" >Description</th>
                            <th scope="col">category</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                        @if(count($pizzas)>0)
                        @foreach($pizzas as $key =>$pizza )
                          <tr>
                            <th scope="row">{{$key+1}}</th>
                            <th><img src="{{url($pizza->image)}}" alt="Image" width="80"/></th>
                            <td>{{$pizza->name}}</td>
                            <td>{{$pizza->description}}</td>
                            <td>{{$pizza->category}}</td>
                            <td><a href="{{route('pizza.edit',$pizza->id)}}"><button type="button" class="btn btn-success">Edit</button></a></td>
                            <td><a href="{{route('pizza.delete',$pizza->id)}}"><button type="button" class="btn btn-danger" >Delete</button></a></td>
                          </tr>
                        @endforeach
                        @else
                        <P>There is nothing to show </P>
                        @endif
                        </tbody>
                      </table>
                </div>
            </div>
            <div>{{$pizzas->links()}}</div>
        </div>
      
    </div>
</div>
@endsection