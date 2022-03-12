@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Navigate') }}</div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Creat</a>
                    </div>
                </div>
                </div>
            </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                    <div class="form-groups">
                        <label for="name">Pizza's Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Pizza's name">
                    </div>
                    <div class="form-groups">
                        <label for="Description">Description</label>
                        <textarea name="Description"  class="form-control"></textarea>
                    </div>
                    <div class="form-inline">
                        <label >Price : </label>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25 p-1">Small Pizza Price :</span>
                            <input type="number" class="form-control" aria-label="">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25 p-1">Medium Pizza Price :</span>
                            <input type="number" class="form-control" aria-label="">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text w-25 p-1">large Pizza Price :</span>
                            <input type="number" class="form-control" aria-label="">
                        </div>
                    </div>
                    <div class="form-groups">
                        <label for="Category" class="pb-1">Catagory :</label>
                        <select class="form-control" id="">
                            <option value="">Cheese Pizza</option>
                            <option value="">Viggie Pizza</option>
                            <option value="">Meat Pizza</option>
                            <option value="">Chiken Pizza</option>
                            <option value="">Mixed Pizza</option>
                            <option value="">Hawaiin Pizza</option>
                        </select>
                    </div>
                    <div>
                        <label for="Image " class="form-label pt-1">Image :</label>
                        <input class="form-control form-control-sm"type="file">
                    </div>
                    <div class="form-froup pt-3">
                        <button type="submit" class="btn btn-primary">Primary</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
