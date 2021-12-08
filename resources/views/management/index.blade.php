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
        <div class="col-md-8">
            
        </div>
    </div>
</div>
@endsection
