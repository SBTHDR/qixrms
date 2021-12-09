@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.partials.sidebar')
        <div class="col-md-8 flex">            
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('table.store') }}" method="POST">
                        @csrf                        
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2"><strong>Table Name</strong></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Type a Table name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror                            
                        </div>                        
                        <div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Table</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection