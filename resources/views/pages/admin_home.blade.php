@extends('layout_master')

@section('content')
    <h1>Admin Dashboard</h1>

    <div class="row mt-4">
        <div class="col-md-6 mb-3">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Bookings</h5>
                    <p class="card-text">
                        View and manage all service bookings submitted by clients.
                    </p>
                    <a href="{{ route('admin.booking_list') }}" class="btn btn-primary mt-auto">
                        Go to bookings list
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Contact Messages</h5>
                    <p class="card-text">
                        Review and respond to contact messages from partners and clients.
                    </p>
                    <a href="{{ route('admin.contact_list') }}" class="btn btn-secondary mt-auto">
                        Go to contacts list
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
