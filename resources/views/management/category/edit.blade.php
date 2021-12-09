@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.partials.sidebar')
        <div class="col-md-8 flex">            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2"><strong>Category Name</strong></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type a category name" value="{{ $category->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                            
                        </div>                        
                        <div>
                            <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancle</a>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection