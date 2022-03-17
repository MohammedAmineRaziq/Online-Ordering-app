@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                    <div class="list-group">
                        <form action="{{route('Frontpage')}}" method="get">
                            <a class="list-group-item list-group-item-action" href="/">Back</a>
                            <input type="submit" value="Cheese Pizza" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Viggie Pizza" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Meat Pizza" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Chiken Pizza" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Mixed Pizza" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="Hawaiin Pizza" name="category" class="list-group-item list-group-item-action">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="row">
                        @forelse ($pizzas as $pizza)
                        <div class="col-md-4 mt-2 text-center border border-warning" style="width:200px ; margin :10px  ">
                            <img src="{{url($pizza->image)}}" alt="" class="img-thumbnail border border-danger" style="width:100% ;margin : 4px">
                            <p style="font-size: 20px ;font-weight: bold;">{{$pizza->name}}</p>
                            <p>{{$pizza->description}}</p>
                            <a href="{{route('pizza.show',$pizza->id)}}">
                                <button  class="btn btn-warning" style="margin: 5px"> Order now </button>
                            </a>
                        </div>
                        @empty
                        <p>{{ __('Nothing to Show') }}</p>
                        @endforelse
                    </div>
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
        color: 1B1A17;
        font-size: 18px

    }
</style>
@endsection
