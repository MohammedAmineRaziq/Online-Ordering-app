@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    @if (session('error-message'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error-message') }}
                        </div>
                    @endif
                    @if (session('success-message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success-message') }}
                        </div>
                    @endif
                    <div class="list-group">
                        @if (Auth::check())
                        <form action="{{route('order.store')}}" method="POST">@csrf
                            <div class="form-group">
                            <p> <b>name : </b>  {{Auth()->user()->name}}</p>
                            <p> <b>email : </b>{{Auth()->user()->email}}</p>
                            <p><b> Phone number : </b> <input type="number" class="form-control" name="phone"></p>
                            <p><b> Small Pizza : </b> <input type="number" class="form-control col-xs-3" name="small_pizza" value="0"></p>
                            <p><b> medium Pizza : </b> <input type="number" class="form-control col-xs-3" name="medium_pizza" value="0"></p>
                            <p><b> Large Pizza : </b> <input type="number" class="form-control col-xs-3" name="large_pizza" value="0"></p>
                            <p><b> Delivery Time : </b><input type="date" name="date" class="form-control" required></p>
                            <p><input type="time" name="time" class="form-control"></p>
                            <p><b> Message : </b><textarea name="message" class="form-control" cols="30" rows="2" required></textarea></p>
                            <p>
                                <button  class="btn btn-warning" type="submit" style=""> Make an Order </button>
                            </p>
                            <p><input type="hidden" name="pizza_id" value="{{$pizza->id}}"></p>
                            </div>
                        </form>
                        @else
                            <p><a href="/login">Please Login</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                        <div class="t-2 text-center border border-warning" style="">
                            <img src="{{url($pizza->image)}}" alt="" class="img-thumbnail" style="width:70% ;margin :6px">
                            <p style="font-weight: bold;"><h3>{{$pizza->name}}</h3></p>
                            <p>{{$pizza->description}}</p>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    div.card-header
    {
        background-color: #FFB72B;
        color: 1B1A17;
        font-size: 18px

    }
    p{
        margin-bottom :5px;    }
</style>
@endsection
