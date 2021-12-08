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
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congrats!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif    
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h5 style="margin: 0">Create Category</h5>
                    <a href="{{ route('category.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
                </div>
            </div>
            <div class="card mt-3 p-3">
                <table class="table table-bordered border-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                      @endforeach                  
                    </tbody>
                  </table>
                  {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection