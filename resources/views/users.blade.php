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
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Customers</li>
                    </ol>
                </nav>
                <div class="card ">
                    <div class="card-header">Customers</div>
                    <div class="card-body ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Member since</th>
        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('M d Y') }}</td>
                                    
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
