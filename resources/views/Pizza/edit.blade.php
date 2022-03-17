@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Navigate') }}</div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">Retourn to the List</a>
                    </div>
                </div>
                </div>
            @if (count($errors)>0)
                <div class="card-body">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            </div>  
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Pizza') }}</div>
                <form method="post" action={{ route('pizza.update',$pizza->id)}}  enctype="multipart/form-data">@csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-groups">
                        <label for="name">Pizza's Name</label>
                        <input type="text" class="form-control" name="name" value="{{$pizza->name}}">
                    </div>
                    <div class="form-groups">
                        <label for="description">Description</label>
                        <textarea name="description"  class="form-control">{{$pizza->description}}</textarea>
                    </div>
                    <div class="form-inline">
                        <label >Price : </label>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25 p-1">Small Pizza Price :</span>
                            <input type="number" name="small_price" class="form-control" value="{{$pizza->small_price}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25 p-1">Medium Pizza Price :</span>
                            <input type="number" name="medium_price" class="form-control" value="{{$pizza->medium_price}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25 p-1">large Pizza Price :</span>
                            <input type="number" name="large_price" class="form-control" value="{{$pizza->large_price}}">
                        </div>
                    </div>
                    <div class="form-groups">
                        <label for="Category" class="pb-1">Catagory :</label>
                        <select  name="category" class="form-control" id="">
                            <option value="Cheese Pizza">Cheese Pizza</option>
                            <option value="Viggie Pizza">Viggie Pizza</option>
                            <option value="Meat Pizza">Meat Pizza</option>
                            <option value="Chiken Pizza">Chiken Pizza</option>
                            <option value="Mixed Pizza">Mixed Pizza</option>
                            <option value="Hawaiin Pizza">Hawaiin Pizza</option>
                        </select>
                    </div>
                    <div>
                        <label for="Image " class="form-label pt-1">Image :</label>
                        <input name="image" class="form-control form-control-sm" type="file">
                        <img src="{{url($pizza->image)}}" alt="Image" width="80"/>
                    </div>
                    <div class="form-froup pt-3">
                        <button type="submit"  class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
