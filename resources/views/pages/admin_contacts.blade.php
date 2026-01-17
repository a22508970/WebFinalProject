@extends('layout_master')

@section('content')
    <h1>Contact Messages</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive mt-3">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Received at</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td style="max-width: 400px;">
                            {{ \Illuminate\Support\Str::limit($contact->message, 150) }}
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($contact->created_at)->format('Y-m-d H:i') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No contact messages found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
