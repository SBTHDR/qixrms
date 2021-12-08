@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="{{ route('category.index') }}" class="list-group-item"><i class="fas fa-align-justify"></i> Category</a>
                <a href="" class="list-group-item"><i class="fas fa-hamburger"></i> Menu</a>
                <a href="" class="list-group-item"><i class="fas fa-chair"></i> Table</a>
                <a href="" class="list-group-item"><i class="fas fa-id-badge"></i> User</a>                
            </div>
        </div>
        <div class="col-md-8 flex">            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Category</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type a category name">                            
                        </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection