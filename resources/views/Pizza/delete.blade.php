<!-- Modal -->
@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('pizza.destroy', $pizza->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                </div>
                <div class="modal-body">
                    Are you sure ?
                </div>
                <div class="modal-footer">
                    <a href="{{route('pizza.index')}}"><button type="button" class="btn btn-secondary"
                        data-dismiss="modal">return</button></a>
                    <button type="submit" class="btn btn-danger">Delete
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection