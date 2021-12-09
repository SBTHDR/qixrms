@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.partials.sidebar')
        <div class="col-md-8 flex">            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2"><strong>Menu Name</strong></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type a menu name" value="{{ $menu->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                      
                        </div>                        
                        <div class="form-group mb-3">
                            <label for="description" class="mb-2"><strong>Menu Description</strong></label>                        
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Type menu description">{{ $menu->description }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                       
                        </div>
                        <div class="form-group mb-3">
                            <label for="price" class="mb-2"><strong>Menu Price</strong></label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" name="price" id="price" placeholder="Type a menu price" value="{{ $menu->price }}">
                            </div>
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                      
                        </div>
                        <div class="form-group mb-3">
                            <label for="category_id" class="mb-2"><strong>Menu Category</strong></label>                                                            
                            <select class="form-select" id="category_id" name="category_id">
                                <option selected>Choose a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id === $menu->category_id ? 'selected' : '' }}>{{ $category->name}}</option>
                                @endforeach
                            </select>                            
                            @error('category_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                      
                        </div>
                        <div class="form-group mb-3">
                            <label for="image" class="mb-2"><strong>Menu Image</strong></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" name="image">
                                <label class="input-group-text" for="image">Upload</label>
                            </div>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                      
                        </div>                     
                        <div>
                            <a href="{{ route('menu.index') }}" class="btn btn-secondary">Cancle</a>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection