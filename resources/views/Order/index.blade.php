@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Users Orders') }}</div>

                <div class="card-body">
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">User</th>
                                <th scope="col">Phone/Email</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col" >Pizza</th>
                                <th scope="col">Small</th>
                                <th scope="col">Medium</th>
                                <th scope="col">Large</th>
                                <th scope="col">Message</th>
                                <th scope="col">Total($)</th>
                                <th scope="col">Status</th>
                                <th scope="col">Accept</th>
                                <th scope="col">Reject</th>
                                <th scope="col">Completed</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                              <tr>
                                <th scope="row">{{$order->user->name}}</th>
                                <th scope="row">{{$order->user->email}}<br>{{$order->Phone}}</th>
                                <th scope="row">{{$order->date}} / {{$order->time}}</th>
                                <th scope="row">{{$order->pizza->name}}</th>
                                <th scope="row">{{$order->small_pizza}}</th>
                                <th scope="row">{{$order->medium_pizza}}</th>
                                <th scope="row">{{$order->large_pizza}}</th>
                                <th scope="row">{{$order->message}}</th>
                                <th scope="row">${{
                                                    ($order->pizza->small_price * $order->small_pizza)+
                                                    ($order->pizza->medium_price * $order->medium_pizza)+
                                                    ($order->pizza->large_price * $order->large_pizza)
                                                }}</th>
                                <th scope="row">{{$order->status}}</th>
                                <form action="{{route('Order.status',$order->id)}}" method="post">@csrf
                                    <th scope="row">
                                        <input  name="status" type="submit" value="Accept" class="btn btn-success">
                                    </th>
                                    <th scope="row">
                                        <input  name="status" type="submit" value="Declin" class="btn btn-danger">
                                    </th>
                                    <th scope="row">
                                        <input  name="status" type="submit" value="Completed" class="btn btn-primary">
                                    </th>
                                </form>
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
