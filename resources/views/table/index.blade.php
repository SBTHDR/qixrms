@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('partials.sidebar')
        <div class="col-md-8 flex">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Congrats!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
            @endif    
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <h5 style="margin: 0">Create Table</h5>
                    <a href="{{ route('table.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
                </div>
            </div>
            <div class="card mt-3 p-3">
                <table class="table table-bordered border-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($tables as $table)
                        <tr>
                            <th>{{ $table->id }}</th>
                            <td>{{ $table->name }}</td>
                            <td>{{ $table->status }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('table.edit', $table->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('table.destroy', $table->id) }}" method="POST">
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
                  {{ $tables->links() }}
            </div>
        </div>
    </div>
</div>
@endsection