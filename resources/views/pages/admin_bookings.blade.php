@extends('layout_master')

@section('content')
    <h1>Admin - Bookings</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (!isset($bookings) || $bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Start</th>
                        <th>End</th>

                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->service_type }}</td>
                            <td>{{ $booking->company_name }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->start_date }}</td>
                            <td>{{ $booking->end_date }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.booking_edit', $booking->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{route('admin.destroy',  $booking->id)}}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Delete this booking?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
