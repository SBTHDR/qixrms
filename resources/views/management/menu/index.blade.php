@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.partials.sidebar')
        <div class="col-md-8 flex">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congrats!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif    
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h5 style="margin: 0">Create Menu</h5>
                    <a href="{{ route('menu.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
                </div>
            </div>
            <div class="card mt-3 p-3">
                <table class="table table-bordered border-dark">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Menu Category</th>
                        <th>Description</th>
                        <th>Price</th>                
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>
                                <img src="{{ asset('images/menu/' . $menu->image) }}" class="img-thumbnail" alt="" width="120px">
                            </td>
                            <td>{{ $menu->category->name }}</td>
                            <td>{{ $menu->description }}</td>
                            <td>{{ $menu->price }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')                                
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">                                            
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are You Sure?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancle</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </form>                                                        
                            </td>
                        </tr>
                      @endforeach                  
                    </tbody>
                  </table>
                  {{ $menus->links() }}
            </div>
        </div>
    </div>
</div>
@endsection