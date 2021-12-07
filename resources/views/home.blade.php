@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Restaurant Management System Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-4">                            
                            <div class="text-center">
                                <div>
                                    <a href="{{ route('management.index') }}"><img src="{{ asset('image/management.png') }}" alt="" width="120"></a>
                                </div>
                                <div class="mt-3">
                                    <h5>Management</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">                            
                            <div class="text-center">
                                <div>
                                    <a href="#"><img src="{{ asset('image/payment.png') }}" alt="" width="120"></a>
                                </div>
                                <div class="mt-3">
                                    <h5>Payment</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <div>
                                    <a href="#"><img src="{{ asset('image/report.png') }}" alt="" width="120"></a>
                                </div>
                                <div class="mt-3">
                                    <h5>Report</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
