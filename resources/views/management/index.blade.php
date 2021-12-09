@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('management.partials.sidebar')
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Management Dashboard</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
