@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div><a href="{{route('Frontpage')}}" ><button type="button" class="btn btn-dark" style="margin-left:100px ">Order Pizza</button></a></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('My Orders') }}</div>
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
                                <th scope="col">Date/Time</th>
                                <th scope="col" >Pizza</th>
                                <th scope="col">Small</th>
                                <th scope="col">Medium</th>
                                <th scope="col">Large</th>
                                <th scope="col">Message</th>
                                <th scope="col">Total($)</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                              <tr>
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
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
     a.list-group-item{
        font-size: 12px
    }
    a.list-group-item:hover{
        background-color: #FFE61B;
        color: 1B1A17;
    }
    div.card-header
    {
        background-color: #FFB72B;
        color: #1B1A17;
        font-size: 18px

    }
    thead
    {
        background-color: #FFB72B;
        color:#1B1A17;
        font-size: 18px
    }
</style>
@endsection
