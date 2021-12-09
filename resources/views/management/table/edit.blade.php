@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.partials.sidebar')
        <div class="col-md-8 flex">            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('table.update', $table->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2"><strong>Table Name</strong></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type a Table name" value="{{ $table->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                            
                        </div>                        
                        <div>
                            <a href="{{ route('table.index') }}" class="btn btn-secondary">Cancle</a>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Table</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection